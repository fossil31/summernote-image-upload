<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->summernote();
	}

	public function db($param = 1, $array_data)
	{
		$this->load->model('test_model', 'test');
		$this->test->add($param, $array_data);
		if ($param == 1)
		{
			redirect('welcome/form', 'refresh');
		}
		else if ($param == 2)
		{
			redirect('welcome/summernote', 'refresh');
		}
	}

	function summernote()
	{
		$this->load->view('summernote');
	}

	function add($param = 1)
	{
		$this->load->library('form_validation');
		if ($param == 1)
		{
			$this->form_validation->set_rules('ref_id', '<strong>REF ID</strong>', 'required|is_unique[test.ref_id]');
			$this->form_validation->set_rules('note', '<strong>Note</strong>', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('form');
			}
			else
			{
				$this->db(1, $this->input->post(NULL, TRUE));
			}
		}
		else if ($param == 2)
		{
			$this->form_validation->set_rules('ref_id', '<strong>REF ID</strong>', 'required|is_unique[test.ref_id]');
			$this->form_validation->set_rules('summernote', '<strong>Summernote</strong>', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('welcome/summernote', 'refresh');
			}
			else
			{
				$this->db(2, $this->input->post(NULL, TRUE));
			}
		}
	}

	public function summernote_delete_image()
	{
		$file = $this->input->post('image', TRUE);
		$file = str_replace('http://localhost/ci', '.', $file);
		if (is_file($file))
		{
			unlink($file);
			if (is_file($file))
			{
				$result = array('status' => 0, 'text' => 'ลบรูปภาพไม่ผ่าน', 'title' => 'Warning', 'type' => 'warning');
			}
			else
			{
				$result = array('status' => 1, 'text' => 'ลบรูปภาพเรียบร้อย', 'title' => 'Success', 'type' => 'success');
			}
		}
		else
		{
			$result = array('status' => 2, 'text' => 'ไม่พบรูปภาพ: '.$file, 'title' => 'Warning', 'type' => 'error');
		}
		echo json_encode($result);
	}

	function summernote_upload_image()
	{
		include('./application/libraries/uploader.php');
		$uploader = new Uploader();
		$upload_path = './uploads/images/';
		$data = $uploader->upload($_FILES['file'], array(
			'limit' => 4,
			'maxSize' => 9999,
			'extensions' => array('png', 'jpg', 'jpeg', 'jpe', 'jfif', 'gif', 'tiff', 'tif', 'raw', 'img'),
			'required' => false,
			'uploadDir' => $upload_path,
			'prefix' => 'prefix-',
			'title' => array('auto', 30),
			'removeFiles' => true,
			'replace' => true,
			'perms' => null,
			'onCheck' => null,
			'onError' => null,
			'onSuccess' => null,
			'onUpload' => null,
			'onComplete' => null,
			'onRemove' => null
			)
		);
		if ($data['isComplete'])
		{
			$result = array('status' => 1, 'image' => '.'.$upload_path.$data['data']['metas'][0]['name']);
		}

		if ($data['hasErrors'])
		{
			$result = array('status' => 1, 'image' => '');
		}
		echo json_encode($result);
	}	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

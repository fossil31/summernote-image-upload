<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summer_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
  }
    
	function add($param = 1, $array_data)
	{
		if (isset($array_data) && is_array($array_data))
		{
			if ($param == 1)
			{
				$this->db->insert('test', 
					array(
						'ref_id' => $array_data['ref_id'],
						'note' => $array_data['note']
					)
				);
			}
			else if ($param == 2)
			{
				$this->db->insert('test', 
					array(
						'ref_id' => $array_data['ref_id'],
						'note' => $array_data['summernote'],
						'datepicker' => $array_data['datepicker'],
						'tags' => $array_data['tags'],
						'create_time' => date('Y-m-d H:i')
					)
				);
			}
			if ($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('insert_message', '<p class="success"><i class="fa fa-check-circle" aria-hidden="true"></i><span class="message">บันทึกข้อมูลเรียบร้อย <label>'.$this->db->affected_rows().'</label> รายการ</span></p>');
			}
			else
			{
				$this->session->set_flashdata('insert_message', 'บันทึกข้อมูลไม่ผ่าน');
			}
		}
		else
		{
			$this->session->set_flashdata('insert_message', 'Error!!! บันทึกข้อมูลไม่ผ่าน');
		}
	}
	public function uploadToDB($array_data)
	{
		$this->db->insert('summernote_upload', array(
				'file_name' => $array_data['name'],
				'original_name' => $array_data['old_name'],
				'file_size' => $array_data['size'],
				'file_path' => $array_data['upload_path'],
				'extension' => $array_data['extension'],
				'created' => date('Y-m-d H:i')
			)
		);
		return $this->db->affected_rows() > 0;
	}

	public function deleteImageDB($file_name)
	{
		$this->db->delete('summernote_upload', array('file_name' => basename($file_name)));
		return $this->db->affected_rows() > 0;
	}

	private function __destruction()
	{
		$this->db->close();
	}
}

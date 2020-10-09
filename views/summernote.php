<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Test:: Form</title>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/ionicons.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/materialdesignicons.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/sweetalert.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery-ui.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-tagsinput.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-switch.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/jquery.jgrowl.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/toastr.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/Toast.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/summernote/summernote.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
<style>
body, html{margin-top:10px;margin-bottom:100px}
h2{margin-bottom:20px}
.form-control{border-radius:0 !important}
.bootstrap-tagsinput{border-radius:0 !important;width:100% !important;box-shadow:none;padding: 1px 4px 2px 4px;min-height: 26px;line-height:26px;height:33px !important;  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;}
.bootstrap-tagsinput input[type=text]{padding:0;height:28px !important;}
.bootstrap-tagsinput span.tag{padding:6px 17px 6px 8px;border-radius:2px;margin-top:-11px;margin-right:0}
.bootstrap-tagsinput span.tag a{margin-top:4px;margin-left:-3px;}
.bootstrap-tagsinput input{padding-top:2px;padding-bottom:2px;}
.bootstrap-tagsinput input.not_valid{padding: 4px 8px;min-width:100px;width:100px;border-radius:2px;background-color:#ffa4a4 !important}
.bootstrap-tagsinput input.not_valid::after{content:"xxx";position:absolute;color:#000}
.bootstrap-tagsinput .tag [data-role=remove] {margin-left: 5px;color:#ff9900;}
.bootstrap-tagsinput .tag [data-role=remove]:hover{color:#ff3300}
.bootstrap-tagsinput .tag [data-role=remove]:after {padding: 8px 2px 0 2px;position:absolute;}
.bootstrap-tagsinput input[type=text] {padding-left:4px}
.bootstrap-tagsinput .label-primary{background-color: #40484C !important}
#validation_errors, #flash-message{padding:0 15px}
#validation_errors p{width:100%;padding:8px 10px;background-color:#ffcccc;border-radius:4px}
#validation_errors p:last-child, #flash-message p{margin-bottom:20px}
#flash-message p{width:100%;padding:14px 15px 8px 18px;border-radius:3px;font-size:18px}
#flash-message p i{padding-right:10px;font-size:34px;position:absolute;margin-top:-4px}
#flash-message p.success{background-color:#d7fbd9}
#flash-message p.success i{color:#109416}
#flash-message p span{margin-left:44px;}
#flash-message p label{font-weight:bold;padding-left:8px;padding-right:8px;}
.sortable .handle:hover{cursor:pointer}
.result-sortable{height:20px;background-color:#efefef;}
.slimScrollDiv { border:0;}
.slimScrollBar{border-radius:30px !important;width:7px !important;}
.slimScrollRail{width:7px !important;border-radius:30px !important;}
label.error{background-color:#ff6600;font-weight:normal;padding:3px 10px;border-radius:3px;margin-top:6px}
.jGrowl-notification, .jGrowl-closer{border-radius:3px !important}
.jGrowl-notification.ui-state-highlight.alert-success{background-color:#00aa00;border:0;opacity:1 !important}
.jGrowl-notification.ui-state-highlight.alert-danger{background-color:#ffa8a8;border:0;opacity:1 !important}
.jGrowl-notification.ui-state-highlight.alert-warning{background-color:#fcf8e3;border:0;opacity:1 !important}
.jGrowl-notification.ui-state-highlight.alert-info{background-color:#d9edf7;border:0;opacity:1 !important}
.jGrowl-notification.ui-state-highlight .jGrowl-header{font-size: 11px;color:#909090}
.jGrowl-notification.ui-state-highlight .jGrowl-message{color:#666}
.jGrowl-notification.ui-state-highlight.alert-success .jGrowl-header{color:#f4f4f4}
.jGrowl-notification.ui-state-highlight.alert-info .jGrowl-header{color:#38a3d6}
.jGrowl-notification.ui-state-highlight.alert-info .jGrowl-message{color:#38a3d6}
.jGrowl-notification.ui-state-highlight.alert-success .jGrowl-message{color:#f8f8f8}
.jGrowl-notification.ui-state-highlight.alert-success .jGrowl-close{color:#eaeaea}
.jGrowl-closer {background-color: #999 !important;border:0 !important;color:#fff}
.note-editor.panel{margin-bottom:0 !important}
</style>
</head>
<body>
<div class="container">
	<section>
		<h1>Form Validation:</h1>
		<div class="row" id="flash-message">
			<?php
			if (validation_errors() == ''):
				echo $this->session->flashdata('insert_message');
			endif;
			?>
		</div>
		<div class="row" id="validation_errors">
			<?php echo validation_errors(); ?>
		</div>
		<form action="<?php echo base_url('welcome/add/2');?>" method="post" id="validation">
			<div class="row">
				<div class="col-lg-3">
					<div class="form-group">
						<label for="ref_id">REF ID:</label>
						<input type="number" class="form-control clear-input text-center" id="ref_id" name="ref_id" value="<?php echo set_value('ref_id'); ?>" placeholder="REF ID...">
					</div>
				</div>
				<div class="col-lg-3">
					<label for="datepicker">Date Picker:</label>
					<div class="form-group">
						<input type="text" class="form-control clear-input text-center datepicker" id="datepicker" name="datepicker" placeholder="วันที่..." readonly>
					</div>
				</div>
				<div class="col-lg-3">
					<label for="tags-input">Bootstrap Tags Input: <a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" target="_blank">Link</a></label>
					<div class="form-group">
						<input type="text" class="form-control tags" name="tags" id="tags-input" placeholder="Tags...">
					</div>
				</div>
				<div class="col-lg-3">
					<label for="input-mask">Input Mask: <a href="https://www.jqueryscript.net/form/Easy-jQuery-Input-Mask-Plugin-inputmask.html" target="_blank">Link</a></label>
					<div class="form-group">
						<input type="text" class="form-control mask clear-input text-center" name="mask" id="input-mask" placeholder="Input Mask...">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label for="note">Note:</label>
						<textarea class="form-control clear-input" id="note" rows="3" name="note" value="<?php echo set_value('note'); ?>" placeholder="รายละเอียดเพิ่มเติม..."></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label for="summernote">Summernote:</label>
						<textarea class="form-control clear-input summernote" id="summernote" rows="3" name="summernote" value="<?php echo set_value('summernote'); ?>" placeholder="SummerNote..." required></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<button type="reset" class="btn btn-default btn-warning" name="reset" id="btn-reset">Reset</button>
				</div>
			</div>
		</form>
	</section>
</div>
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery-ui.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap-add-clear.js');?>"></script>
<script src="<?php echo base_url('/assets/js/autogrow.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/sweetalert.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap-tagsinput.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.inputmask.bundle.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/sweetalert.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap-switch.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.jgrowl.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/toastr.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/Toasts.js');?>"></script>
<script src="<?php echo base_url('/assets/summernote/summernote.min.js');?>"></script>
<script>
function capitalize (string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}
$(function() {
	$.jGrowl.defaults.closerTemplate = '<div class="alert alert-info">Close All</div>';
	$('textarea').autogrow();
	$(".datepicker").datepicker({
		dateFormat: 'yy-mm-dd'
	});
    $("#sortable1").sortable({
		handle: ".handle",
		placeholder: "ui-state-highlight",
		stop: function (event, ui) {
			let order = $(this).sortable('toArray', {attribute: 'data-value'});
			$('#sortable-result').append('<p class="result-sortable">' + order + '</p>');
			console.log(order);
		}
	});
    $(".sortable").disableSelection();
    $("#sortable2").sortable({
		placeholder: "ui-state-highlight",
		stop: function (event, ui) {
			let order = $(this).sortable('toArray', {attribute: 'value'});
			$('#sortable-result').append('<p class="result-sortable">' + order + '</p>');
		}
	});
	$('form').on('reset', function(e){
		var validator = $("#validation").validate();
		validator.resetForm();
		$('#validation_errors').html('');
		$('#ref_id').focus();
		$('.summernote').summernote('reset');
	});
	$('#clear-sortable-logs').on('click', function(){
		$('#sortable-result').html('');
	});
	setTimeout(function(){ 
		$('#flash-message p').slideUp(); 
	}, 5000);
	$('#checkbox-slim, #jFiler-slim').slimscroll({
		railVisible: true,
		railBorderRadius: 0
	});
	$('.tags').tagsinput({ tagClass: 'label label-primary', trimValue: true });
	$("#validation").validate({
		ignore: '',
		ignore: ":hidden:not(#summernote)",
		errorPlacement: function(error, element) {
			if (element.hasClass("summernote")) {
				error.insertAfter(element.siblings(".note-editor"));
			} else {
				error.insertAfter(element);
			}
		}, 
		rules: {
			ref_id: {
				required: true,
				number: true
			},
			summernote: {
				required: true,
				minlength: 10
			}
		}
	});
	$(".clear-input").addClear();
	$('.mask').inputmask("99-9999999");
	$(".bootstrap-switch").bootstrapSwitch();

	function sendFile(file, editor, welEditable) {
		data = new FormData();
		data.append("file", file);
		$.ajax({
			data: data,
			type: "POST",
			url: "<?php echo base_url('welcome/summernote_upload_image');?>",
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'json',
			async: false,
			success: function(res) {
				if (res.status == 1) {
					//editor.summernote('insertImage', res.image);
					let image = $('<img>').attr({'src': res.image, 'class': "img-rounded img-responsive"});
					editor.summernote("insertNode", image[0]);					
				} else {
					alert('Upload รูปภาพไม่ผ่าน::');
				}
			}
		});
	}

	$('.summernote').summernote({
		placeholder: 'รายละเอียด...',
		disableResizeEditor: false,
		toolbar: [
			['style', ['style']],
			['font', ['fontname', 'fontsize', 'fontsizeunit', 'backcolor', 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['insert', ['link', 'picture', 'video', 'table', 'hr']],
			['misc', ['fullscreen', 'codeview']],
		],		
		callbacks: {
            onChange: function(contents, $editable) {
				$(this).valid();
			},
			onImageUpload: function(files) {
				sendFile(files[0], $(this));
			},
            onMediaDelete: function(target) {
				$.ajax({
					type: 'post', 
					url: "<?php echo base_url('welcome/summernote_delete_image/?time=');?>" + new Date().getTime(),
					data: {'image': target[0].src},
					dataType: 'json',
					async: false,
					success:function(res){
						if (res.status == 1) {
							toastr.success(res.text);
						} else if (res.status == 2) {
							toastr.error(res.text);
						} else {
							toastr.warning(res.text);
						}
					}
				}).fail(function (jqXHR, textStatus, error) {
					swal("Ajax Error", jqXHR.responseText, "error");
				});
            }
		}
	});

});
</script>
</body>
</html>

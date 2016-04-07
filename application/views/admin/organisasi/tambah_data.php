<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('admin/do_upload_organisasi');?>
<hr>
<table class="table table-bordered">
<input type="file" name="userfile" size="20"></input>
<br>
<input type="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('admin/organisasi','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>
</table>
</body>
</html>
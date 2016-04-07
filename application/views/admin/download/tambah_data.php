<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('admin/do_upload_download');?>
<hr>
<table class="table table-bordered">
<input type="file" name="userfile" size="20"></input>
<br>
<label>Description</label>
<input type="text" class="form-control" name="title" required></input>
<br>
<input type="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('download','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>
</table>
</body>
</html>
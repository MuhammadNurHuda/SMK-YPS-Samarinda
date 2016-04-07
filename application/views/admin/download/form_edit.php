<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('admin/edit_download');?>
<hr>
<table class="table table-bordered">
<input type="hidden" name="id" value="<?php echo $record['id_download'];?>"></input>
<input type="file" name="userfile" size="20"></input>
<br>
<label>Description</label>
<input type="text" class="form-control" name="title" required></input>
<br>
<input type="submit" name="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('admin/download','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>
</table>
</body>
</html>
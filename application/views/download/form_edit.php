<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('download/edit');?>
<hr>
<table class="table table-bordered">
<input type="hidden" name="id" value="<?php echo $record['id_download']; ?>"></input>
<input type="file" name="userfile" size="20"></input>
<br>
<label>Description</label>
<input type="text" class="form-control" value="<?php echo $record['judul_file']; ?>" name="title" required></input>
<br>
<input type="submit" name="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('download','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>
</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('admin/edit_organisasi');?>
<input type="hidden" name="id" value="<?php echo $record['id_organisasi']?>"></input>
<hr>
<table class="table table-bordered">
			<label>Judul</label>
			<input type="text" class="form-control" name="judul" value="<?php echo $record['nama_file']?>"></input><br>
<input type="file" name="userfile" size="20" required></input>
<br>
<input type="submit" name="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('admin/organisasi','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>
</table>
</body>
</html>
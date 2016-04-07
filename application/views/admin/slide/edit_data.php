<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('admin/edit_slide');?>
<hr>
<input type="hidden" name="id" value="<?php echo $record['id_gambar']; ?>"></input>

<table class="table table-bordered">
<tr>
<td>File</td>
<td>
<img style="padding-bottom: 10px;width: 250px;height: 200px;" src="<?php echo base_url('uploads/'.$record['nama_file']); ?>">
<input type="file" name="userfile"></input></td>
</tr>
<tr>
	<td>Title</td>
	<td><input type="text" value="<?php echo $record['title_file']; ?>" name="title" class="form-control" placeholder="Title File"></input></td>
	<input type="hidden" name="pict" value="<?php echo $record['nama_file']; ?>"></input>
</tr>
</table>
<input type="submit" name="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('admin/slide','Kembali',array('class'=>'btn btn-danger')); ?>
</body>
</html>
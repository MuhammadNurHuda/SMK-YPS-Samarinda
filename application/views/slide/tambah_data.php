<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php echo form_open_multipart('slide/do_upload');?>

<table class="table table-bordered">
<tr>
<td>File</td>
<td>
<input type="file" name="userfile"></input></td>
</tr>
<tr>
	<td>Title</td>
	<td><input type="text" name="title" class="form-control" placeholder="Title File"></input></td>
</tr>
</table>
<input type="submit" value="Upload" class="btn btn-success"></input>
<?php echo anchor('slide','Kembali',array('class'=>'btn btn-danger')); ?>
</body>
</html>
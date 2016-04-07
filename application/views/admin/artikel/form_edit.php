<!DOCTYPE html>
<html>
<head>
<style type="text/css">
</style>

<script type="text/javascript" src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.min.js">
</script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});

</script>
<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
	<title></title>
</head>
<body>

<div class="container-fluid">
<div class="col-sm-12">
	<h4 class="sub-header">Edit Artikel</h4>
	<?php echo form_open_multipart('admin/edit_artikel');?>
	<form class="form-horizontal">
	 <input type="hidden" name="id" value="<?php echo $record['artikel_id']?>">
	 <input type="hidden" name="pict" value="<?php echo $record['nama_file'];?>"></input>
		<div class="form-group">
			<input type="text" name="nama_artikel" class="form-control input-lg" placeholder="Judul" value="<?php echo $record['artikel_nama']?>">
		</div>
		<div class="form-group">
			 <textarea name="isi_artikel" style="width:100%;height:250px"><?php echo $record['artikel_content']?></textarea>
		</div>
		<div class="form-group">
			<input type="file" name="userfile" size="20"></input>
			<img src="<?php echo base_url('uploads/'.$record['nama_file']);?>" style="width: 700px;height: 400px;">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-success">
			<?php 
				echo anchor('admin/artikel','Kembali',array('class'=>'btn btn-danger btn-md'));
 			?>
		</div>
		
	</form>
</div>
</div>
</div>
</body>
</html>
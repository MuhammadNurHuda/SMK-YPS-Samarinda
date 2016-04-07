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
	<h4 class="sub-header">Tambah Artikel</h4>
	<?php echo form_open_multipart('artikel/do_upload');?>
	<form class="form-horizontal">
		<div class="form-group">
			<input id="article_title" type="text" name="nama_artikel" class="form-control input-lg" placeholder="Judul" maxlength="40">
		</div>
		<div class="form-group">
			 <textarea name="isi_artikel" style="width:100%;height:250px"></textarea>
		</div>
		<div class="form-group">
			<input type="file" name="userfile" size="20"></input>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success" name="submit">Simpan</button>
			<?php 
		echo anchor('artikel','Kembali',array('class'=>'btn btn-danger btn-md'));
 			?>
		</div>
		
	</form>
</div>
</div>
</div>
</body>
</html>
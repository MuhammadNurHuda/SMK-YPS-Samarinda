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
	<h4 class="sub-header">Edit Motivasi</h4>
	<?php echo form_open_multipart('admin/edit_motivasi');?>
	<input type="hidden" name="id" value="<?php echo $record['id_motivasi'];?>"></input>
	<form class="form-horizontal">
		<div class="form-group">
			 <textarea name="isi_motivasi" style="width:100%;height:250px"><?php echo $record['isi_motivasi']; ?></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success" name="submit">Simpan</button>
			<?php 
		echo anchor('admin/motivasi','Kembali',array('class'=>'btn btn-danger btn-md'));
 			?>
		</div>
		
	</form>
</div>
</div>
</div>
</body>
</html>
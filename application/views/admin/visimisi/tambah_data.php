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
<div class="container-fluid">
<div class="col-sm-12">
	<h4 class="sub-header">Visi, Misi, dan Tujuan</h4>
	<?php echo form_open('admin/do_upload_visimisi');?>
	<table class="table">
			 <tr>
			 <td><label>Visi : </label></td>
			 <td><textarea name="visi" style="width:100%;height:100px" class="form-control"></textarea></td>
			 </tr>
			 <tr>
			 <td><label>Misi : </label></td>
			 <td><textarea name="misi" style="width:100%;height:100px" class="form-control"></textarea></td>
			 </tr>
			 <tr>
			 <td><label>Tujuan : </label></td>
			 <td><textarea name="tujuan" style="width:100%;height:100px" class="form-control"></textarea></td>
			 </tr>

			<tr><td><button type="submit" class="btn btn-success" name="submit">Simpan</button></td>
			<td><?php 
				echo anchor('admin/visi_misi','Kembali',array('class'=>'btn btn-danger btn-md'));
 			?></td>
 			</tr>
	</table>


<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Jurusan</h4>';
echo anchor('admin/post_jurusan','Tambah Profil Jurusan',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
 <table class="table table-bordered">
 <?php echo $this ->  session -> flashdata('msg'); ?>
 	<th>No</th>
 	<th>View File</th>
 	<th>Nama Jurusan</th>
 	<th>Profil Jurusan</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($jurusan -> result() as $r) {
 	 ?>
 	<tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><img style="width:200px;height:px" src="<?php echo base_url('uploads/'.$r->file_jurusan);?>"></td>
 	 	<td><?php echo $r->nama_jurusan; ?></td>
 	 	<td><?php echo $r->profil_jurusan;?></td>
 	 	<td width='20'><?php echo anchor('admin/edit_jurusan/'.$r->id_jurusan,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('admin/delete_jurusan/'.$r->id_jurusan,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>
 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
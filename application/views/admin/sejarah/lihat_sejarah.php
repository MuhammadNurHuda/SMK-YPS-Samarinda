<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Sejarah</h4>';
echo anchor('admin/post_sejarah','Tambah Sejarah',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
 <table class="table table-bordered">
 	<th>No</th>
 	<th>Judul Sejarah</th>
 	<th>Isi Sejarah</th>
 	<th>Foto Sejarah</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($record -> result() as $r) {
 	 ?>
 	 <tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><?php echo $r->judul_sejarah; ?></td>
 	 	<td><?php echo $r->isi_sejarah?></td>
 	 	<td align="center"><img style="width:250px;height:px" src="<?php echo base_url('uploads/'.$r->file_sejarah);?>"></td>
 	 	<td width='20'><?php echo anchor('admin/edit_sejarah/'.$r->id_sejarah,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('admin/delete_sejarah/'.$r->id_sejarah,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>

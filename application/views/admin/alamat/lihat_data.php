<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Alamat</h4>';
echo anchor('admin/post_alamat','Tambah Alamat',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
 <table class="table table-bordered">
 <?php echo $this -> session -> flashdata('msg'); ?>
 	<th>No</th>
 	<th>Alamat</th>
 	<th>Email</th>
 	<th>No Telepon</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($record -> result() as $r) {
 	 ?>
 	 <tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><?php echo $r->alamat; ?></td>
 	 	<td><?php echo $r->email;?></td>
 	 	<td><?php echo $r->notlp ?></td>
 	 	<td width='20'><?php echo anchor('admin/edit_alamat/'.$r->id_alamat,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('admin/delete_alamat/'.$r->id_alamat,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
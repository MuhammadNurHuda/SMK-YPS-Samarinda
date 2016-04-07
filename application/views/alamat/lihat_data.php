<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Alamat</h4>';
echo anchor('alamat/post','Tambah Alamat',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
 <table class="table table-bordered">
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
 	 	<td width='20'><?php echo anchor('alamat/edit/'.$r->id_alamat,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('alamat/delete/'.$r->id_alamat,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
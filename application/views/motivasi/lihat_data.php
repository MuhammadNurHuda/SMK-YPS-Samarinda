<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Motivasi</h4>';
echo anchor('motivasi/post','Tambah Motivasi',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
 <table class="table table-bordered">
 	<th width="50">No</th>
 	<th>Motivasi</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($record -> result() as $r) {
 	 ?>
 	 <tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><?php echo $r->isi_motivasi; ?></td>
 	 	<td width='20'><?php echo anchor('motivasi/edit/'.$r->id_motivasi,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('motivasi/delete/'.$r->id_motivasi,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
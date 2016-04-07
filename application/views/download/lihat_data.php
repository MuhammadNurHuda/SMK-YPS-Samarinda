<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Download</h4>';
echo anchor('download/post','Tambah Data Download',array('class'=>'btn btn-primary btn-sm'));
 ?>
<p></p>
<?php echo $this -> session -> flashdata('msg'); ?>
 <table class="table table-bordered">

 	<th>No</th>
 	<th>Nama File</th>
 	<th>Ukuran File</th>
 	<th>Download</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($record -> result() as $r) {
 	 ?>
 	 <tr>
 	 	<td width="10"><?php echo $no; ?></td>
 	 	<td><?php echo $r->nama_file;?></td>
 	 	<td><?php echo $r->ukuran_file;?></td>
 	 	<td><a href="#">Download</a></td>
 	 	<td width='20'><?php echo anchor('download/edit/'.$r->id_download,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('download/delete/'.$r->id_download,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
 </table>
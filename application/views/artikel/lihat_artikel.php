<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Artikel</h4>';
echo anchor('artikel/post','Tambah Artikel',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>

 <table class="table table-bordered">
 <?php echo $this -> session -> flashdata('msg'); ?>
 	<th>No</th>
 	<th>Judul Artikel</th>
 	<th>Tanggal Artikel</th>
 	<th>Isi Artikel</th>
 	<th>Foto</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($record -> result() as $r) {
 	 ?>
 	 <tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><?php echo $r->artikel_nama; ?></td>
 	 	<td><?php echo tgl_indo($r->artikel_date);?></td>
 	 	<td><?php echo $r->artikel_content?></td>
 	 	<td align="center"><img style="width:250px;height:px" src="<?php echo base_url('uploads/'.$r->nama_file);?>"></td>
 	 	<td width='20'><?php echo anchor('artikel/edit/'.$r->artikel_id,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('artikel/delete/'.$r->nama_file,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
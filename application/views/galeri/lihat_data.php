<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<?php 
echo '<h4>Galeri</h4>';
echo anchor('galeri/post','Tambah Gambar',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
 <table class="table table-bordered">
 <?php echo $this -> session -> flashdata('msg'); ?>
 	<th>No</th>
 	<th>View File</th>
 	<th>Nama File</th>
 	<th>Ukuran File</th>
 	<th>Title File</th>
 	<th>Isi</th>
 	<th colspan="2">Operasi</th>

 	<?php 
 	$no=1;
 	foreach ($record -> result() as $r) {
 	 ?>
 	<tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><img style="width:200px;height:px" src="<?php echo base_url('uploads/'.$r->nama_file);?>"></td>
 	 	<td><?php echo $r->nama_file; ?></td>
 	 	<td><?php echo $r->ukuran_file;?></td>
 	 	<td><?php echo $r->title_file; ?></td>
 	 	<td><?php echo $r->isi_file; ?></td>
 	 	<td width='20'><?php echo anchor('galeri/edit/'.$r->galeri_id,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('galeri/delete/'.$r->galeri_id,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
 </table>
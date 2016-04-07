<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<h4>Data Slide</h4>
<?php 
echo anchor('slide/post','Tambah Gambar Slide',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
<table class="table table-bordered">
<?php echo $this ->  session -> flashdata('msg'); ?>

	<tr>
		<th>No</th>
		<th>Gambar</th>
		<th>Title File</th>
		<th colspan="2">Operasi</th>
	</tr>
<?php 
$no=1;
foreach ($slide->result() as $r) 
{	 ?>
 	 <tr>
 	 	<td><?php echo $no; ?></td>
 	 	<td><img style="width: 250px;height: 200px;" src="<?php echo base_url('uploads/'.$r->nama_file); ?>"></td>
 	 	<td><?php echo $r->title_file; ?></td>
 	 	<td width='20'><?php echo anchor('slide/edit/'.$r->id_gambar,'<span class="glyphicon glyphicon-edit"></span>')?></td>
		<td width='20'><?php echo anchor('slide/delete/'.$r->nama_file,'<span class="glyphicon glyphicon-trash"></span>')?></td>
 	 </tr>

 	 <?php 
 	 $no++;
 		}
 	  ?>
	</table>
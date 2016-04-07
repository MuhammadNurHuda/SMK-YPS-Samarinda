<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<h4>Visi Misi</h4>
<?php 
echo anchor('admin/post_visimisi','Tambah Visi Misi',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
<table class="table table-bordered">
<?php echo $this -> session -> flashdata('msg'); ?>
	<tr>
		<th>No</th>
		<th>Visi</th>
		<th>Misi</th>
		<th>Tujuan</th>
		<th colspan="2">Operasi</th>
	</tr>
<?php 
$no=1;
foreach ($record -> result() as $r) 
{
	echo "<tr><td width='10'>$no</td>
	<td>$r->isi_visi</td>
	<td>$r->isi_misi</td>
	<td>$r->isi_tujuan</td>
	<td width='20'>".anchor('admin/edit_visimisi/'.$r->id_visi,'<span class="glyphicon glyphicon-edit"></span>')."</td>
	<td width='20'>".anchor('admin/delete_visimisi/'.$r->id_visi,'<span class="glyphicon glyphicon-trash"></span>')."</td>
	</tr>";
	$no++;
}
 ?>
	</table>
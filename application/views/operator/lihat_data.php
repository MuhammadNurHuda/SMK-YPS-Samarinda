<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<h4>Data Operator</h4>
<?php 
echo anchor('operator/post','Tambah Operator',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
<table class="table table-bordered">
<?php echo $this ->  session -> flashdata('msg'); ?>
	<tr>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>Login Terakhir</th>
		<th colspan="2">Operasi</th>
	</tr>
<?php 
$no=1;
foreach ($record->result() as $r) 
{
	echo "<tr><td width='10'>$no</td>
	<td>$r->nama_lengkap</td>
	<td>$r->username</td>
	<td>".tgl_indo($r->last_login)."</td>
	<td width='20'>".anchor('operator/edit/'.$r->operator_id,"<span class='glyphicon glyphicon-edit'></span>",array('title'=>'Edit Data '.$r->nama_lengkap))."</td>
	<td width='20'>".anchor('operator/delete/'.$r->operator_id,"<span class='glyphicon glyphicon-trash''></span>",array('title'=>'Delete Data '.$r->nama_lengkap))."</td>
	</tr>";
	$no++;
}
 ?>
	</table>
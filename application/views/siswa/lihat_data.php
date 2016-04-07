<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<h4>Data Siswa</h4>
<?php 
echo anchor('siswa/post','Tambah Data Siswa',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
<table class="table table-bordered">
<?php echo $this -> session -> flashdata('msg'); ?>
	<tr>
		<th>No</th>
		<th>NISN</th>
		<th>Nama Siswa</th>
		<th>Kelas Siswa</th>
		<th>Jurusan</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Lahir</th>
		<th colspan="2">Operasi</th>
	</tr>
<?php 
$no=1;
foreach ($record->result() as $r) 
{
	echo "<tr><td width='10'>$no</td>
	<td>$r->nisn</td>
	<td>$r->nama_siswa</td>
	<td>$r->kelas_siswa</td>
	<td>$r->jurusan</td>
	<td>$r->jk</td>
	<td>".tgl_indo($r->tgl_lahir)."</td>
	<td width='20'>".anchor('siswa/edit/'.$r->id_siswa,'<span class="glyphicon glyphicon-edit"></span>')."</td>
	<td width='20'>".anchor('siswa/delete/'.$r->id_siswa,'<span class="glyphicon glyphicon-trash"></span>')."</td>
	</tr>";
	$no++;
}
 ?>
	</table>
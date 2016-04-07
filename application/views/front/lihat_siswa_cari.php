<html>
<head>
	<title></title>
</head>
<body>
 <p></p>
 <div>
 		<h1>Data Siswa</h1>
 </div>
 </div><br><br>
<br><br>

<div class="container">
<?php echo $this->session->flashdata('msg');?>
<table class="table table-border" id="black">
	<tr>
		<th>No</th>
		<th>NISN</th>
		<th>Nama Siswa</th>
		<th>Kelas Siswa</th>
		<th>Jurusan</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Lahir</th>
	</tr>	
<?php 
$no=1;
foreach ($siswa->result() as $r) 
{
?>
	<tr><td width='10'><?php echo $no;?></td>
	<td><?php echo $r->nisn;?></td>
	<td><?php echo $r->nama_siswa;?></td>
	<td><?php echo $r->kelas_siswa;?></td>
	<td><?php echo $r->jurusan;?></td>
	<td><?php echo $r->jk;?></td>
	<td><?php echo $r->tgl_lahir; ?></td>
	</tr>
	<?php
	$no++;
	}
	?>
	</table>
		<?php echo anchor('siswa','Kembali',array('class'=>'btn btn-primary'));?>
		<br>
	<br>
</div>
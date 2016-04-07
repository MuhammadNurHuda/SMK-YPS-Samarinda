<html>
<head>
	<title></title>
</head>
<body>
 <div>
 		<h1>Data Guru</h1>
 </div>
 </div><br><br>
<br><br>

<div class="container">
<?php echo $this->session->flashdata('msg');?>
<table class="table table-border" id="black">
	<tr>
		<th>No</th>
		<th>NIP</th>
		<th>Nama Guru</th>
		<th>Jabatan</th>
		<th>Mata Pelajaran</th>
		<th>Aksi</th>
	</tr>
<?php 
$no=1;
foreach ($cari->result() as $r) 
{
?>
	<tr><td width='10'><?php echo $no;?></td>
	<td><?php echo $r->nip_guru;?></td>
	<td><?php echo $r->nama_guru;?></td>
	<td><?php echo $r->jabatan;?></td>
	<td><?php echo $r->mata_pelajaran;?></td>
	<td><?php echo anchor('guru/guru_detail/'.$r->guru_id,'Detail');?></td>
	</tr>
	<?php
	$no++;
	}
	?>
	</table>
	<br><br>
	<?php echo anchor('guru','Kembali',array('class'=>'btn btn-primary'));?>
	<br><br>
</div>
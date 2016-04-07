<html>
<head>
	<title></title>
</head>
<body>
 <p></p>
 <div>
 		<h1>Data Guru</h1>
 </div>
 </div><br><br>
 <?php echo form_open('guru/cari_guru');?>
<div class="container">
	<div class="row">
	<div class="col-sm-2">
		<select name="field" class="form-control">
		<option value="nip_guru">NIP</option>
		<option value="nama_guru">Nama Guru</option>
		<option value="mata_pelajaran">Mata Pelajaran</option>
	</select>
	</div>
	<div class="col-md-3">
	<input type="text" class="form-control" name="keyword" placeholder="Cari Guru" required>
	</div>
	<div class="col-md-2">
	<button type="submit" value="Cari" class="glyphicon glyphicon-search btn btn-success"></button>
	</div>
	</div>
</div>
<br><br>
<div class="container">
<table class="table table-borde" id="black">
	<tr>
		<th>No</th>
		<th>NIP/NUPTK</th>
		<th>Nama Guru</th>
		<th>Jabatan</th>
		<th>Mata Pelajaran</th>
		<th>Aksi</th>
	</tr>
<?php 
$no=1;
foreach ($guru->result() as $r) 
{
?>
	<tr><td width='10'><?php echo $no;?></td>
	<td><?php echo $r->nip_guru;?></td>
	<td><?php echo $r->nama_guru;?></td>
	<td><?php echo $r->jabatan; ?></td>
	<td><?php echo $r->mata_pelajaran;?></td>
	<td><?php echo anchor('guru/guru_detail/'.$r->guru_id,'Detail');?></td>
	</tr>
	<?php
	$no++;
	}
	?>
	</table>
	<?php 
	echo $paging;
	 ?>
</div>
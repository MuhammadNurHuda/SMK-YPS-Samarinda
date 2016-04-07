<html>
<head>
	<title></title>
</head>
<body>
<?php 
 ?>
 <p></p>
 <div>
 		 <h1 align="center">Data Siswa</h1>
 	</div>
 </div><br><br>
 <?php echo form_open('siswa/cari_siswa');?>
<div class="container">
	<div class="row">
	<div class="col-sm-2">
	<select name="kelas_siswa" class="form-control">
		<option>X</option>
		<option>XI</option>
		<option>XII</option>
	</select>
	</div>
	<div class="col-sm-3">
	<input type="text" name="jurusan" placeholder="Jurusan" class="form-control">
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
	<?php 
	echo $paging;
	 ?>
</div>
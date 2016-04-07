<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	td{
		padding: 7px;
	}
</style>
<body>
  <div>
 		<h1>Lihat Guru Detail</h1>
  </div>
 </div><br><br>
 <div class="container">
 	<div class="col-md-4">
 		<img src="<?php echo base_url('uploads/'.$guru['nama_file']);?>" style="width: 300px;height: 250px">
 	</div>
 	<div class="col-md-8">
 	<table>
			<tr><td>NIP</td><td><?php echo ': ' , $guru['nip_guru'];?></td></tr>
			<tr><td>Nama Guru</td><td><?php echo ': ', $guru['nama_guru'];?></td></tr>
			<tr><td>Jabatan</td><td><?php echo ': ', $guru['jabatan'];?></td></tr>
			<tr><td>Mata Pelajaran</td><td><?php echo ': ',$guru['mata_pelajaran'];?></td></tr>
			<tr><td>Alamat</td><td><?php echo ': ',$guru['alamat'];?></td></tr>
 	</table>

 	</div>
 </div>
 <br><br>
</body>
</html>
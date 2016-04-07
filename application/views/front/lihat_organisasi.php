<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Struktur Organisasi</h1>
<div class="container">
 	<?php 
 	foreach ($organisasi -> result() as $r) {
 	 ?>
 	 	<br>
 	 	<td><p align="center"><img style="width:100%;height:600px" src="<?php echo base_url('uploads/'.$r->nama_file);?>"></p></td>
 	 	<br><br>
 	 <?php 
 		}
 	  ?>
 </table>
</div>
</body>
</html>

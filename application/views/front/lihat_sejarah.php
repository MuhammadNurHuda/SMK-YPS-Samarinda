	<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.p {
    line-height: 1.6em;
    text-indent: 50px;
	}
</style>
<body>
 <p></p>
 <div>
 		<h1>Sejarah</h1>
 </div>
 </div><br>
<table>
 	<?php 
 	foreach ($sejarah -> result() as $r) {
 	 ?>
 	 <div class="container">
 	 			<h3 align="center"><?php echo $r->judul_sejarah; ?></h3><br>
 	 			<div><p align="center"><img style="width:100%;height:550px;" src="<?php echo base_url('uploads/'.$r->file_sejarah);?>" class="gambar"></p><br></div>
 				<p><div class="p"><?php echo $r->isi_sejarah; ?></div></p><br>
 	  </div>
 	 <?php 
 		}
 	  ?>
</table>
</body>







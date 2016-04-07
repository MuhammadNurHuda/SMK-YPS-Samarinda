<html>
<head>
	<title></title>
</head>
<body>
<?php 
 ?>
 <p></p>
 <div>
 		 <h1 align="center">Visi Misi dan Tujuan</h1>
 	</div><br>
 </div>
<div class="container">
<?php 
foreach ($misi->result() as $r) 
{
?>
	<h2 align="center">Visi</h2>
	<p><?php echo $r->isi_visi;?></p><hr>
	<h2 align="center">Misi</h2>
	<p><?php echo $r->isi_misi; ?></p><hr>
	<h2 align="center">Tujuan</h2>
	<p><?php echo $r->isi_tujuan; ?></p><br><br>
	<?php 
}
	 ?>
</div>


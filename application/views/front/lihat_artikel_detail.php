<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style type="text/css">
	.gambar {
    float: left;
    margin-right: 20px;
    margin-top: 15px;
    margin-bottom: 20px;
	}

	</style>	
<body>
<div>
 		<h1><?php echo $artikel['artikel_nama'];?></h1>
</div>
<div class="container">
Ditulis : <?php echo $artikel['nama_lengkap'];?> | Pada : <?php echo tgl_indo($artikel['artikel_date']);?>
</div>
<div class="container">
 	 <div class="pull-left"><img src="<?php echo base_url('uploads/'.$artikel['nama_file']);?>" style="width: 500px;height: 420px" class="gambar img-rounded"></div>
 	 <p><div class="p"><?php echo $artikel['artikel_content'];?></div></p><br>
</div>
</body>
</html>


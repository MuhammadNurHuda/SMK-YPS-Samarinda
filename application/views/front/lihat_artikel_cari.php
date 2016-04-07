	<html>
<head>
	<title></title>
</head>

<body>
<?php 
 ?>
 <p></p>
 <div>
 		<h1>Artikel</h1>
 </div>
 </div><br>
<div class="container">
	<?php echo $this -> session -> flashdata('msg'); ?>
</div><br>
<table>
 	<?php 
 	foreach ($artikel -> result() as $r) {
 	 ?>
 	 <div class="container">
 	 	<div class="row">
 	 	<div class="col-md-4"><br>
 	 		<img class="img-rounded" style="width:300px;height:240px" src="<?php echo base_url('uploads/'.$r->nama_file);?>">
 	 	</div>
 	 	<div class="col-md-8">
 	 <h3 align="justify"><?php echo $r->artikel_nama; ?></h3>
 	 <p>Oleh <?php echo $r->nama_lengkap;?></p>
 	 <p><span class="glyphicon glyphicon-time"></span><small>Diposting pada</small> <?php echo tgl_indo($r->artikel_date);?></p><hr>
 	 <p><?php echo substr($r->artikel_content, 0, 300)." ....";?></p><br>
 	 <?php echo anchor('artikel/artikel_detail/'.$r->artikel_id,'Selengkapnya',array('class'=>'btn btn-primary hvr-icon-forward')) ?><p></p><br>
 	  </div>
 	 <?php 
 		}
 	  ?>
</table>
	<div class="container">
	<div class="col-md-12">
		
	</div>
	</div>
</body>



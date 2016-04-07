<html>
<head>
	<title></title>
</head>
<style type="text/css">
.hovereffect {
  width: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  color: white;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1.3em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.modal {
    /*! adjust transition time */
    -webkit-transition: all ease-out !important;
    -moz-transition: all 0.3s ease-out !important;
    -o-transition: all 0.3s ease-out !important;
    transition: all 0.3s ease-out !important;
}
.modal.in .modal-dialog {
    /*! editthis transform to any transform you want */
    -webkit-transform: scale(1, 1) !important;
    -ms-transform: scale(1, 1) !important;
    transform: scale(1, 1) !important;
}
.modal.fade .modal-dialog {
    /*! disable sliding from left/right/top/bottom */
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
}
</style>
<body>
<?php 
 ?>
 <p></p>
 <div>
 		 <h1>Galeri</h1>
 	</div>
 </div>
<table>
 	<?php
 	foreach ($galeri -> result() as $r) {
 	 ?>
 	 <div class="container">
 	 	<div class="row">
 	 	<div class="col-md-3">
 	 <div class="hovereffect">
 	 	<img src="<?php echo base_url('uploads/'.$r->nama_file);?>" style="width: 500px;height: 230px;" class="img-responsive img-rounded"></a>
 	 <div class="overlay">
 	 	<h2></h2>
 	 	<a href="#" data-toggle="modal" data-target="#modal<?php echo $r->galeri_id;?>"><button class="btn btn-primary btn-sm">Show</button></a>
 	 </div>
 	 </div>
    <h4><?php echo $r->title_file; ?></h4><br>
 	 <div class="modal fade" role="dialog" id="modal<?php echo $r->galeri_id;?>">
 	 	<div class="modal-dialog">
 	 		<div class="modal-content">
 	 			<div class="modal-header">
 	 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	 				<img src="<?php echo base_url('uploads/'.$r->nama_file);?>" style="width: 100%;height: 50%;" class="img-responsive">
 	 				<p>Diunggah oleh : <?php echo $r->nama_lengkap; ?></p>
 	 			</div>
 	 			<div class="modal-body"> 	
 	 				<h2><?php echo $r->title_file ?></h2>			
 	 				<p><?php echo $r->isi_file; ?></p>
 	 			</div>
 	 		</div>
 	 	</div>
 	 </div>
 	 </div>
 	 <?php 
 		}
 	  ?>
 	 </table>
 	 <br><br>
</body>


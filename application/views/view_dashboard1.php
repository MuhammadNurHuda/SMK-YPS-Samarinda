<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<style type="text/css">
    .carousel-fade .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
  opacity: 5;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-control {
  z-index: 2;
}

.well p {
  color: black;
}

.well hr {
height: 1px;
color: #123455;
background-color: #123455;
border: none;
}

.well {
    background: white;
}
</style>

<body>
<div class="container">
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <?php foreach ($slide -> result() as $s) { ?>
        <?php } ?>
        <div class="carousel-inner">
            <?php foreach ($slide -> result() as $s) { ?>
            <div class="item">
            <img id="<?php echo $s->id_gambar; ?>" src="<?php echo base_url('uploads/'.$s->nama_file);?>" class="img-responsive" style="width: 1360px;height:442px;"> 
            </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div>
</div>
    <div id="about" class="intro">
      <div class="container">
        <div class="row-fluid">
            <div class="col-md-12">
            <?php foreach ($motivasi -> result() as $m) { ?>
                <p><?php echo $m->isi_motivasi;?></p>
             <?php } ?>
            </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
     <div id="services" class="services">
      <div class="container">
        <h2 align="center">Artikel</h2><hr>
        <div class="col-md-12">
            <?php foreach ($artikel -> result() as $a) { ?>
             <div class="col-md-3">
                <div class="well well-lg">
                    <img class="img-responsive img-rounded" style="width:200px;height:160px" src="<?php echo base_url('uploads/'.$a->nama_file);?>"><hr>
                    <p><?php echo substr($a->artikel_content, 0, 100)." ....";?></p>
                    <?php echo anchor('artikel/artikel_detail/'.$a->artikel_id,'Selengkapnya',array('class'=>'btn btn-success hvr-icon-forward')) ?><p></p>
                </div>
            </div>
            <?php } ?>
        </div>
      </div>
      </div>

    <div id="about" class="intra">
      <div class="container-fluid">
        <div class="row">    
            </div>
        </div>
      </div>
    <!-- Services -->

    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
      <div class="vert-text">
        <div class="container">
            <h2>Profil Jurusan</h2><hr>
                    <ul class="thumbnails">
                    <div class="col-md-12">
                      <div class="col-md-6">
                    <?php foreach ($jurusan -> result() as $j) { ?>
                    <p align="center"><a href="<?php echo site_url('jurusan/index'); ?>"><img src="<?php echo base_url('uploads/'.$j->file_jurusan);?>" style="width: 200px;height: 200px;" class="img-circle"></a><br>
                    <a href="<?php echo site_url('jurusan/index'); ?>" style="color: white;font-size: 20"><?php echo $j->nama_jurusan;?></a></p>
                    </div>
                    <?php } ?>
                    </div>
            </div>
        </div>
        </div>   
      </div>
    </div>
    <!-- /Callout -->

      
</body>
</html>
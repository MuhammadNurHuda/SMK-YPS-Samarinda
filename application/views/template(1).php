
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SMK YPS Samarinda</title>
  <link rel="shorcut icon" href="<?php echo base_url('assets/css/img/30401090.png');?>">
  <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/template.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/hover.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/stylish-portfolio.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/bootstrap-social.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"> <script type="text/javascript">
  $(document).ready(function(){
  $('#myCarousel').find('.item').first().addClass('active');
});
</script>
</head>
<style type="text/css">
    .navbar .navbar-nav {
        display: inline-block;
        float: none;
        vertical-align: top;
    }

    .navbar .navbar-collapse {
        text-align: center;
    }
}
</style>
<body>
  <header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    </button>
      <a href="#" class="pull-left"><img src="<?php echo base_url('assets/css/img/30401090.png');?>" width="50px;" style="margin-right: 10px"></a><a href="#" class="navbar-brand">SMK YPS Samarinda</a>
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><?php echo anchor('index','Beranda',array('class'=>'hvr-overline-from-center'));?></a></li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle hvr-overline-from-center" data-toggle="dropdown">Profil<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <li><?php echo anchor('visi_misi','Visi & Misi');?></li>
              <li><?php echo anchor('guru','Data Guru');?></li>
              <li><?php echo anchor('siswa','Data Siswa');?></li>
              <li><?php echo anchor('jurusan','Profil Jurusan');?></li>
              <li><?php echo anchor('sejarah','Sejarah Singkat');?></li>
              <li><?php echo anchor('organisasi','Struktur Organisasi');?></li>
              </ul>
            </li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle hvr-overline-from-center" data-toggle="dropdown">Alumni<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <li><?php echo anchor('alumni','Direktori Alumni');?></li>
              <li><?php echo anchor('alumni/info_alumni','Info Alumni');?></li>
      </ul>
      </li>
      <li><?php echo anchor('artikel','Artikel',array('class'=>'hvr-overline-from-center'));?></li>
      <li><?php echo anchor('galeri','Galeri',array('class'=>'hvr-overline-from-center'));?></li>
      <li><?php echo anchor('kontak','Kontak',array('class'=>'hvr-overline-from-center'));?></li>
      <li><?php echo anchor('download','Download',array('class'=>'hvr-overline-from-center'));?></li>
      <li><?php echo anchor('auth/login','Login',array('class'=>'hvr-bounce-to-bottom'))?></li>
      </ul>
    </form>
      </div>
        </nav>
        </div></div></nav></header>
  <div>  
    
  <div>
     <?php echo $contents;?>
  </div>

  
    <div id="services" class="services">
      <div class="container">
          <div class="row">

        </div>

        <div class="col-md-6">
           <h2 align="center">Link Terkait</h2>
           <hr>
           <div class="col-md-12">
              <ul class="arrow">
                        <li><a href="http://disdik.kaltimprov.go.id/" target="_blank" >Dinas Pendidikan Provinsi Kalimantan Timur</a></li>
                        <li><a href="http://disdik.samarindakota.go.id/" target="_blank">Dinas Pendidikan Kota Samarinda</a></li>
                        <li><a href="http://nisn.data.kemdikbud.go.id/page/data" target="_blank">Nomor Induk Siswa Nasional</a></li>
                        <li><a href="http://snmptn.ac.id/" target="_blank">SNMPTN</a></li>
                        <li><a href="http://dapo.dikmen.kemdikbud.go.id/" target="_blank">DAPODIKMEN</a></li>
                    </ul>
            </div>
        </div>
      <div class="col-md-6">
      <h2 align="center">Alamat</h2>
                <hr>
                  <ul class="arrow">
                  <?php foreach ($alamat->result() as $r)
                  {
                  ?>
                        <i class="fa fa-home"></i>
                        <strong>Alamat</strong> : <?php echo $r->alamat;?>
                        <br>
                        <i class="fa fa-envelope"></i>
                        <strong>Email</strong> : <a href="mailto:<?php echo $r->email; ?>"><?php echo $r->email;?></a> <br>
                        <i class="fa fa-phone"></i>
                        <strong>Telepon</strong> : <?php echo $r->notlp;?>
                  <?php } ?>
                  </ul>
                </div>
            </div>
    </div>
    <!-- Portfolio -->
    </div>

  </div>
  <footer class="footer">
  <div class="container-fluid">     
          <div class="col-md-4">
            <p align="center" style="color: white;">Supported by <a href="http://betech.academy/">Betech Academy..</a></p>
          </div>
           <div class="col-md-4 col-md-offset-4">
               <p style="color: white">Connect wiht us :
               <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
               <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/smkypssmd/"><span class="fa fa-facebook"></span></a>
               <a class="btn btn-social-icon btn-yahoo" href="https://id.yahoo.com/?p=us/"><span class="fa fa-yahoo"></span></a>
               <a class="btn btn-social-icon btn-google" href="https://gmail.com/"><span class="fa fa-google"></span></a>
               <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Back to Top" data-placement="top"> <span class="glyphicon glyphicon-chevron-up"></span></a>
          </div>
        </div>
</div>
</footer>

</body>
</html>

<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
});
</script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>



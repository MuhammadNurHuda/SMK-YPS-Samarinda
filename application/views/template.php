
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title id="logo">Admin SMK YPS Samarinda</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Halaman Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome <?php echo $this->session->userdata('nama_lengkap');?></a></li>
            <li class="active"><li><?php echo anchor('auth/logout','Logout');?></li></li>
          </ul>
        </div>
      </div>
    </nav>  
  <div class="nav nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-home fa-lg"> </i><?php echo anchor('admin/login',' Dashboard')?>
                  </a>
                </li>
                <li> 
                  <a href="#">
                  <i class="fa fa-newspaper-o fa-lg"> </i><?php echo anchor('admin/artikel',' Artikel')?>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fa fa-picture-o fa-lg"> </i><?php echo anchor('admin/galeri',' Galeri')?>
                  </a>
                </li>
                <li  data-toggle="collapse" data-target="#profil" class="collapsed">
                  <a href="#"><i class="fa fa-archive fa-lg"></i> Profil <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="profil">
                    <li class="active"><?php echo anchor('admin/visi_misi','Visi Misi')?></li>
                    <li><a href="#"><?php echo anchor('admin/siswa','Data Siswa')?></a></li>
                    <li><a href="#"><?php echo anchor('admin/guru','Data Guru')?></a></li>
                    <li><a href="#"><?php echo anchor('admin/jurusan','Profil Jurusan')?></a></li>
                    <li><a href="#"><?php echo anchor('admin/organisasi','Struktur Organisasi')?></a></li>
                    <li><a href="#"><?php echo anchor('admin/sejarah','Sejarah')?></a></li>
                </ul>
                <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"> </i><?php echo anchor('admin/alumni',' Alumni')?>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"> </i><?php echo anchor('admin/operator',' Operator')?>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fa fa-download fa-lg"> </i> <?php echo anchor('admin/download','Download')?>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fa fa-comment fa-lg"> </i> <?php echo anchor('admin/kontak','Kontak')?>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fa fa-film fa-lg"> </i> <?php echo anchor('admin/slide','Carousel')?>
                  </a>
                </li>
                <li  data-toggle="collapse" data-target="#lainnya" class="collapsed">
                  <a href="#"><i class="fa fa-plus-square fa-lg"></i> Lainnya <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="lainnya">
                    <li class="active"><?php echo anchor('admin/alamat','Alamat')?></li>
                    <li><?php echo anchor('admin/motivasi','Motivasi')?></li>
                </ul>
            </div>
            </div>
        </nav>
        </ul>

    <div class="container">
    <div id="tabel">
      <?php echo $contents;?>
    </div>
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>

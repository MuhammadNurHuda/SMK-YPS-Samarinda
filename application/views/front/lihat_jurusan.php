<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Profil Kompetensi Keahlian</h1>
<div class="container">
  <ul class="nav nav-tabs nav-justified" id="MyTab">
  <?php foreach ($jurusan -> result() as $j) { ?>
    <li class="presentation"><a data-toggle="tab" href="#<?php echo $j->id_jurusan?>"><?php echo $j->nama_jurusan;?></a></li>
  <?php } ?>
  </ul>

  <div class="tab-content">
  <?php foreach ($jurusan -> result() as $j) { ?>
    <div id="<?php echo $j->id_jurusan?>" class="tab-pane fade in"><br>
    <div class="col-md-6">
      <p><?php echo $j->profil_jurusan;?></p>
    </div>
    <div class="col-md-6">
      <p align="right"><img src="<?php echo base_url('uploads/'.$j->file_jurusan);?>" style="width: 300px;height: 300px;"></p>
    </div>
    </div>
  <?php  } ?>
</div>
</body>
<script src="<?php echo base_url()?>assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $('.nav-tabs a:first').tab('show')
});
</script>
</html>
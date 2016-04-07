<style type="text/css">
		#test {
			margin-top: 20px;
		}
</style>
 <div>
 		 <h1>Download</h1>
 	</div>
  <?php echo form_open('download/cari_download');?>
  <br>
 <div class="container">
 	<div id="test">
	<div class="row">
	<div class="col-md-3">
	<input type="text" class="form-control" name="keyword" placeholder="Cari Download">
	</div>
	<div class="col-md-2">
	<button type="submit" value="cari" class="glyphicon glyphicon-search btn btn-success"></button>
	</div>
	</div>
</div>
<br><br>
<div class="container">
 <table class="table table-border">
 	<th>No</th>
 	<th>Nama File</th>
 	<th>Aksi</th>
 	<?php 
 	$no=1;
 	foreach ($download -> result() as $r) {
 	 ?>
 	 <tr>
 	 	<td width="130"><?php echo $no; ?></td>
 	 	<td><?php echo $r->judul_file;?></td>
 	 	<td ><?php echo anchor(base_url("uploads/".$r->nama_file),'Download');?></td>
 	 </tr>
 	 <?php 
 	 $no++;
 		}
 	  ?>
 	  </table>
 </div>
 </div>
<style type="text/css">
		#test {
			margin-top: 20px;
		}
</style>
 <div>
 		 <h1>Download</h1>
 	</div>
 	</div>
 	<br><br>
<br><br>
<div class="container">
 	 <?php echo $this->session->flashdata('msg');?>
  <table class="table table-border" id="black">
  <tr>
 	<th>No</th>
 	<th>Nama File</th>
 	<th>Aksi</th>
  </tr>
 	<?php 
 	$no=1;
 	foreach ($cari -> result() as $r) {
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
 	  <?php echo anchor ('download','Kembali',array('class'=>'btn btn-primary'));?><br><br><br><br>
 </div>
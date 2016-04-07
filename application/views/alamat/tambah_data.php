<h4>Tambah Alamat</h4>
<?php 
echo form_open_multipart('alamat/do_upload');
 ?>
 <table class="table table-bordered">
 	<tr><td width="130">Alamat</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><textarea name="alamat" class="form-control" placeholder="Alamat" value="" required></textarea></div></td>
 	</tr>
 	<tr><td width="130">Email</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="email" class="form-control" placeholder="Email" value="" required></input></div></td>
 	</tr>
 	<tr><td width="130">No Telepon</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="notlp" class="form-control" placeholder="No Telepon" value="" required></input></div></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('alamat','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

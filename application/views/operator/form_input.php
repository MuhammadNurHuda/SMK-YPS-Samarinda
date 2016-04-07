<h4>Tambah Data Operator</h4>
<?php 
echo form_open('operator/post');
 ?>
 <table class="table table-bordered">
 	<tr><td width="130">Nama Lengkap</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nama_lengkap" class="form-control" placeholder="Nama lengkap" value=""></input></div></td>
 	</tr>
 	<tr><td>Username</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="username" class="form-control" placeholder="Username"></input></div></td>
 	</tr>
 	<tr><td>Password</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="password" name="password" class="form-control" placeholder="Password"></input></div></td>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('operator','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

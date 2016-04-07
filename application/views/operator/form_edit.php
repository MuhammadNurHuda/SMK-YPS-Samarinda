<h4>Edit Data Operator</h4>
<?php 
echo form_open('operator/edit');
 ?>
<input type="hidden" value="<?php echo $record['operator_id']?>" name="id"></input>
 <table class="table table-bordered">
 	<tr><td width="130">Nama Lengkap</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap" value="<?php echo $record['nama_lengkap']?>"></input></div></td>
 	</tr>
 	<tr><td>Username</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="username" class="form-control"placeholder="username" value="<?php echo $record['username']?>"></input></div></td>
 	</tr>
 	<tr><td>Password</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="password" name="password" class="form-control"  placeholder="password"></input></div></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-danger">Simpan</button></button></td>
	<td align="right"><?php echo anchor('operator','Kembali',array('class'=>'btn btn-info')); ?></td>
 	</tr>

 </table>

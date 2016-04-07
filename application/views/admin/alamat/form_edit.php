<h4>Edit Alamat</h4>
<?php 
echo form_open_multipart('admin/edit_alamat');
 ?>
 <table class="table table-bordered">
 	<input type="hidden" name="id" value="<?php echo $record['id_alamat'];?>"></input>
 	<tr><td width="130">Alamat</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><textarea name="alamat" class="form-control" placeholder="Alamat" required><?php echo $record['alamat'] ?></textarea></div></td>
 	</tr>
 	<tr><td width="130">Email</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $record['email'] ?>" required></input></div></td>
 	</tr>
 	<tr><td width="130">No Telepon</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="notlp" class="form-control" placeholder="No Telepon" value="<?php echo $record['notlp'] ?>" required></input></div></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('admin/alamat','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

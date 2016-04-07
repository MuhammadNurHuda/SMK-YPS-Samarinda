<h4>Tambah Data Guru</h4>
<?php 
echo form_open_multipart('admin/do_upload_guru');
 ?>
 <table class="table table-bordered">
 	<tr><td width="130">NIP</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nip_guru" class="form-control" placeholder="NIP" value="" required></input></div></td>
 	</tr>
 	<tr><td width="130">Nama Guru</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru" value="" required></input></div></td>
 	</tr>
 	<tr><td width="130">Jabatan</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="" required></input></div></td>
 	</tr>
 	<tr><td width="130">Mata Pelajaran</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<input type="text" name="mata_pelajaran" class="form-control" placeholder="Mata Pelajaran" required>
 		</div></td>
 	</tr>
 	<tr><td width="130">Tempat Lahir</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="" required></input></div></td>
 	</tr>
 	<tr><td width="130">Tanggal Lahir</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="" required></input></div></td>
 	</tr>
 	<tr>
 		<td width="130">Alamat</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><textarea name="alamat" class="form-control" placeholder="Alamat"></textarea></div></td>
 	</tr>
 	<tr>
 		<td width="130">Foto</td>
 		<td align="right"><input type="file" name="userfile" size="20" required></input></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('admin/guru','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

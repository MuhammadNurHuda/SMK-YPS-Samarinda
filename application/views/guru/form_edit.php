<h4>Edit Data Guru</h4>
<?php 
echo form_open_multipart('guru/edit');
 ?>
 <input type="hidden" name="id" value="<?php echo $record['guru_id']?>">
 <table class="table table-bordered">
 	<tr><td width="130">NIP</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nip_guru" class="form-control" placeholder="NIP" value="<?php echo $record['nip_guru']?>" required></input></div></td>
 	</tr>
 	<tr><td width="130">Nama Guru</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru" value="<?php echo $record['nama_guru']?>" required></input></div></td>
 	</tr>
 	<tr><td width="130">Jabatan</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $record['jabatan']?>" required></input></div></td>
 	</tr>
 	<tr><td width="130">Mata Pelajaran</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<input type="text" name="mata_pelajaran" class="form-control" value="<?php echo $record['mata_pelajaran']?>" required>
 		</div></td>
 	</tr>
 	<tr><td width="130">Tempat Lahir</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $record['tempat_lahir'] ?>" required></input></div></td>
 	</tr>
 	<tr><td width="130">Tanggal Lahir</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $record['tanggal_lahir'] ?>" required></input></div></td>
 	</tr>
 	<tr>
 		<td width="130">Alamat</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><textarea name="alamat" class="form-control"><?php echo $record['alamat']?></textarea></div></td>
 	</tr>
 	<tr>
 		<td width="130">Foto</td>
 		<td align="right"><input type="file" name="userfile" size="20" required></input></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('guru','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

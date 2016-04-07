<h4>Tambah Data Siswa</h4>
<?php 
echo form_open('siswa/do_upload');
 ?>
 <table class="table table-bordered">
 	<tr><td width="130">NISN</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nisn" class="form-control" placeholder="NISN" value="" minlength="10" required></input></div></td>
 	</tr>
 	<tr><td width="130">Nama Siswa</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap" value="" required></input></div></td>
 	</tr>
 	<tr><td width="130">Kelas Siswa</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<select name="kelas_siswa" class="form-control" required>
 				<option>X</option>
 				<option>XI</option>
 				<option>XII</option>
 			</select>
 		</div></td>
 	</tr>
 	<tr><td width="130">Jenis Kelamin</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<select name="jk" class="form-control" required>
 				<option>Laki-laki</option>
 				<option>Perempuan</option>
 			</select>
 		</div></td>
 	</tr>
 	<tr><td width="130">Jurusan</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<select name="jurusan" class="form-control" required>
 				<option>Teknik Komputer & Jaringan</option>
 				<option>Administrasi Perkantoran</option>
 			</select>
 		</div></td>
 	</tr>
 	<tr><td width="130">Tanggal Lahir</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo date('Y-m-d')?>" required></input></div></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('siswa','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

<h4>Edit Data Siswa</h4>
<?php 
echo form_open('admin/edit_siswa');
 ?>
 <input type="hidden" name="id" value="<?php echo $record['id_siswa']?>">
 <table class="table table-bordered">
 	<tr><td width="130">NISN</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nisn" class="form-control" placeholder="NISN" value="<?php echo $record['nisn']?>" minlength="10" required></input></div></td>
 	</tr>
 	<tr><td width="130">Nama Siswa</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap" value="<?php echo $record['nama_siswa']?>" required></input></div></td>
 	</tr>
 	<tr><td width="130">Kelas Siswa</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<select name="kelas_siswa" class="form-control" required>
 				<?php if ($record['kelas_siswa'] == 'X'){
 					echo "<option selected>X</option><option>XI</option><option>XII</option>";
 					}
 					else if ($record['kelas_siswa'] == 'XI'){
 					echo "<option>X</option><option selected>XI</option><option>XII</option>";
 					}
 					else if ($record['kelas_siswa'] == 'XII'){
 					echo "<option>X</option><option>XI</option><option selected>XII</option>";
 					} 
 				?>
 			</select>
 		</div></td>
 	</tr>
 	<tr><td width="130">Jenis Kelamin</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<select name="jk" class="form-control" required>
 				<?php if ($record['jk'] == 'Laki-laki') {
 					echo "<option selected='selected'>Laki-laki</option><option>Perempuan</option>";
 					} 
 					else if ($record['jk'] =='Perempuan') {
 					echo "<option>Laki-laki</option><option selected='selected'>Perempuan</option>"
 					;
 					}
 				?>
 			</select>
 		</div></td>
 	</tr>
 	<tr><td width="130">Jurusan</td>
 		<td><div class="col-sm-6 col-sm-offset-6">
 			<select name="jurusan" class="form-control" required>
 				<?php if ($record['jurusan'] == 'Teknik Komputer & Jaringan') {
 					echo "<option selected>Teknik Komputer & Jaringan</option><option>Administrasi Perkantoran</option>";
 					} 
 					else if ($record['jurusan'] =='Administrasi Perkantoran') {
 					echo "<option>Teknik Komputer & Jaringan</option><option selected>Administrasi Perkantoran</option>";
 					}
 				?>
 			</select>
 		</div></td>
 	</tr>
 	<tr><td width="130">Tanggal Lahir</td>
 		<td><div class="col-sm-6 col-sm-offset-6"><input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo date('Y-m-d')?>" required></input></div></td>
 	</tr>
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button></td>
 	<td align="right"><?php echo anchor('admin/siswa','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

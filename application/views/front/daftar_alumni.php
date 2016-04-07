<h1>Daftar Alumni</h1>
<hr>
<div class="container">
	<div class="col-md-12">

		<?php echo form_open('alumni/daftar_alumni'); ?>
				<table class="table table-border">
<?php echo $this->session->flashdata('msg'); ?>
	<tr>
		<td>Nama Lengkap</td>
		<td colspan="2">
			<input type="text" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Nama Alumni" name="name"></input>
			<span class="text-danger"><?php echo form_error('name'); ?></span>
		</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>
			<input type="text" name="tempat" class="form-control" value="<?php echo set_value('tempat'); ?>" placeholder="Tempat"></input>
			<span class="text-danger"><?php echo form_error('tempat'); ?></span>
		</td>
		<td>
			<input type="date" name="date" class="form-control" value="<?php echo set_value('date'); ?>"></input>
			<span class="text-danger"><?php echo form_error('date'); ?></span>
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td colspan="2">
			<select name="jk" class="form-control">
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Agama Alumni</td>
		<td colspan="2">
			<select name="agama" class="form-control">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat Alumni</td>
		<td colspan="2">
			<textarea name="alamat" placeholder="Alamat" class="form-control" style="height: 100px;"><?php echo set_value('alamat'); ?></textarea>
			<span class="text-danger"><?php echo form_error('alamat'); ?></span>
		</td>
	</tr>
	<tr>
		<td>NISN</td>
		<td colspan="2"><input type="text" maxlength="12" value="<?php echo set_value('nisn'); ?>" class="form-control" placeholder="NISN" name="nisn"></input>
		<span class="text-danger"><?php echo form_error('nisn'); ?></span>
		</td>
	</tr>
	<tr>
		<td>Tahun Lulus</td>
		<td colspan="2">
			<input type="text" value="<?php echo set_value('tahun'); ?>" name="tahun" class="form-control" placeholder="Tahun Lulus"></input>
			<span class="text-danger"><?php echo form_error('tahun'); ?></span>
		</td>
	</tr>
	<tr>
		<td>Tempat/Alamat Kerja Alumni</td>
		<td colspan="2">
			<textarea style="height: 100px;" name="alm_kerja" placeholder="Isi alamat tempat kerja dan nama tempat kerja" class="form-control"><?php echo set_value('alm_kerja'); ?></textarea>
			<span class="text-danger"><?php echo form_error('alm_kerja'); ?></span>
		</td>
	</tr>
	<tr>
		<td>Tempat/Alamat Kuliah Alumni</td>
		<td colspan="2">
			<textarea style="height: 100px;" name="alm_kuliah" placeholder="Isi Nama Universitas dan Alamat Universitas" class="form-control"><?php echo set_value('alm_kuliah'); ?></textarea>
			<span class="text-danger"><?php echo form_error('alm_kuliah'); ?></span>
		</td>
	</tr>
	<tr>
		<td>No.Hp</td>
		<td colspan="2">
			<input type="text" value="<?php echo set_value('tlp'); ?>" name="tlp" class="form-control" placeholder="Telepon"></input>
			<span class="text-danger"><?php echo form_error('tlp'); ?></span>
		</td>
	</tr>
	<tr>
	<td>Email</td>
	<td  colspan="2">
		<input type="text" value="<?php echo set_value('email'); ?>" name="email" class="form-control" placeholder="Email"></input>
		<span class="text-danger"><?php echo form_error('email'); ?></span>
		</td>
	</tr>
	<tr>
		<td>Captcha</td>
		<td colspan="2">
			<?php echo $img; ?>
			<p></p>
			<input type="text" name="captcha" placeholder="Kode diatas"  value="<?php echo set_value('captcha'); ?>" class="form-control"></input>
			<span class="text-danger"><?php echo form_error('captcha'); ?></span>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		<button type="submit" name="submit" class="btn btn-primary">Daftar</button>
		<?php echo anchor('alumni/info_alumni','Cancel',array('class'=>'btn btn-warning')); ?>
		</td>
	</tr>
	<?php echo form_close(); ?>
</table>
	</div>
</div>
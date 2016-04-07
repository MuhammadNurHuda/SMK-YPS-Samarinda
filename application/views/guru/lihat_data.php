<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<h4>Data Guru</h4>
<?php 
echo anchor('guru/post','Tambah Data Guru',array('class'=>'btn btn-primary btn-sm'));
 ?>
 <p></p>
<table class="table table-bordered">
<?php echo $this -> session -> flashdata('msg'); ?>
	<tr>
		<th>No</th>
		<th>NIP</th>
		<th>Nama Guru</th>
		<th>Jabatan</th>
		<th>Mata Pelajaran</th>
		<th>Tempat, Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Foto</th>
		<th colspan="2">Operasi</th>
	</tr>
<?php 
$no=1;
foreach ($record->result() as $r) 
{
	?>
	<tr><td width='10'><?php echo $no;?></td>
	<td><?php echo $r->nip_guru;?></td>
	<td><?php echo $r->nama_guru;?></td>
	<td><?php echo $r->jabatan; ?></td>
	<td><?php echo $r->mata_pelajaran;?></td>
	<td><?php echo $r->tempat_lahir.', '.tgl_indo($r->tanggal_lahir);?></td>
	<td><?php echo $r->alamat;?></td>
	<td align="center"><img style="width:250px;height:px" src="<?php echo base_url('uploads/'.$r->nama_file);?>"></td>
	<td width='20'><?php echo anchor('guru/edit/'.$r->guru_id,'<span class="glyphicon glyphicon-edit"></span>')?></td>
	<td width='20'><?php echo anchor('guru/delete/'.$r->guru_id,'<span class="glyphicon glyphicon-trash"></span>')?></td>
	</tr>
	<?php
	$no++;
	}
	?>
	</table>
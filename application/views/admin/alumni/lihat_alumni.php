<h4>Pendataan Alumni</h4>

<table class="table table-border">
<?php echo $this -> session -> flashdata('msg'); ?>

	<th>#</th>
	<th>Nama</th>
	<th>NISN</th>
	<th>Tempat, Tanggal Lahir</th>
	<th>Jenis Kelamin</th>
	<th>Agama</th>
	<th colspan="2">Operator</th>
	<?php $no=1; foreach ($record -> result() as $r) { ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $r->nama_alumni; ?></td>
		<td><?php echo $r->nisn_alumni; ?></td>
		<td><?php echo $r->tmpat_lhr.", ".tgl_indo($r->tgl_lhr); ?></td>
		<td><?php echo $r->jk_alumni; ?></td>
		<td><?php echo $r->agama_alumni; ?></td>
		<td width="10"><?php echo anchor('admin/delete_alumni/'.$r->id_alumni,'<span class="glyphicon glyphicon-trash"></span>',array('title' => 'Delete data '.$r->nama_alumni)); ?>
		</td>
		<td>
		<?php 
		if ($r->status == '0') {
			echo anchor('admin/publish/'.$r->id_alumni,'<span class="glyphicon glyphicon-ok"></span>',array('title' => 'Publikasikan '.$r->nama_alumni));
		} 
		else {
			echo anchor('admin/unpublish/'.$r->id_alumni,'<span class="glyphicon glyphicon-remove"></span>',array('title' => 'Unpublikasikan '.$r->nama_alumni));
			}
			?>
		</td>
	</tr>
	<?php  $no++; }  ?>

</table>
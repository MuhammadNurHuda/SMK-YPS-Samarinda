<h1>Data Alumni</h1>
<div class="container">
<div class="col-md-12">
<table class="table">
<br>
	<th>#</th>
	<th>Nama Alumni</th>
	<th>Tempat, Tanggal lahir</th>
	<th>Agama</th>
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>Email</th>
	<?php $no = 1; 
		foreach ($record -> result() as $r) { ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $r->nama_alumni; ?></td>
			<td><?php echo $r->tmpat_lhr.", ".tgl_indo($r->tgl_lhr); ?></td>
			<td><?php echo $r->agama_alumni; ?></td>
			<td><?php echo $r->jk_alumni; ?></td>
			<td><?php echo $r->alamat_alumni; ?></td>
			<td><?php echo $r->email; ?></td>
		</tr>
	<?php  $no++; } ?>	
</table>
<?php echo $paging; ?>
</div>
</div>
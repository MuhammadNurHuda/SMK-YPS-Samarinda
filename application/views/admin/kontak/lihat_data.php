<style type="text/css">
		h4{
			margin-top: 30px;
		}
</style>
<h4>Comment</h4>
 <p></p>
<table class="table table-bordered">
<?php echo $this -> session -> flashdata('msg'); ?>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Operasi</th>
	</tr>
<?php 
$no=1;
foreach ($record->result() as $r) 
{
	echo "<tr><td width='10'>$no</td>
	<td>$r->nama</td>
	<td>$r->email</td>
	<td>$r->subject</td>
	<td>$r->message</td>
	<td align='center'>".anchor('admin/delete_kontak/'.$r->kontak_id,'<span class="glyphicon glyphicon-trash"></span>')."</td>
	</tr>";
	$no++;
}
 ?>
	</table>
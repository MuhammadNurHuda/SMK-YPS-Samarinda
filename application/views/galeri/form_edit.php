<h4>Edit Galeri</h4>
<?php 
echo form_open_multipart('galeri/edit');
 ?>
 <input type="hidden" name="id" value="<?php echo $record['galeri_id']?>">
 	<tr><label>Isi</label></tr>
 	<input type="hidden" name="pict" value="<?php echo $record['nama_file'];?>"></input>
	<tr><td colspan="2"><input type="text" class="form-control" name="isi" value="<?php echo $record['isi_file'];?>"required></input></td></tr>
 	<tr><td><label>Judul</label></td></tr>
	<tr><td colspan="2"><input type="text" class="form-control" name="title" value="<?php echo $record['title_file']?>"required></input></td></tr>
	</tr>
	<hr>
	<td><img src="<?php echo base_url('uploads/'.$record['nama_file']);?>" style="width: 700px;height: 400px;"></td>
 	<td colspan="2"><input type="file" name="userfile" size="20"></input></td><br>
 	</tr>
	
 	<tr><td><button type="submit" name="submit" class="btn btn-success">Simpan</button></button>
 	<?php echo anchor('galeri','Kembali',array('class'=>'btn btn-danger')); ?></td></tr>

 </table>

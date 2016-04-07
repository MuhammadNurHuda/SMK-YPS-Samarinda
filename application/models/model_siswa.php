<?php 
/**
* 
*/
class Model_siswa extends CI_Model
{
	
	function lihatdata()
	{
		return $this->db->get_where('tb_siswa');
	}

	function tampilkan_data_paging($halaman,$batas)
  	{
      return $this->db->query("select *from tb_siswa ORDER BY nama_siswa ASC limit $halaman,$batas");
  	}

	function get_one($id)
	{
		$param = array('id_siswa'=>$id);
  		return $this->db->get_where('tb_siswa',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_siswa',$id);
		$this->db->update('tb_siswa',$data);
	}

	function delete($id)
	{
		$this->db->where('id_siswa',$id);
		$this->db->delete('tb_siswa');
	}

	function cari($jurusan,$kelas)
	{
		$query = "Select *FROM tb_siswa where jurusan like '%$jurusan%' and kelas_siswa like '%$kelas%'";
		return $this->db->query($query);
	}
}

 ?>

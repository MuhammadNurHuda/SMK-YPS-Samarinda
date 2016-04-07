<?php 
/**
* 
*/
class model_download extends CI_Model
{
	
	function lihatdata()
	{
		return $this->db->get_where('tb_download');
	}

	function post($data)
	{
		$this->db->insert('tb_download',$data);
	}

	function get_one($id)
	{
		$param = array('id_download'=>$id);
  		return $this->db->get_where('tb_download',$param);
	}

	function cari($keyword)
	{
		$query = "Select *FROM tb_download where judul_file like '%$keyword%'";
		return $this->db->query($query);
	}
}
 ?>
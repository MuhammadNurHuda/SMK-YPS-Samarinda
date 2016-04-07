<?php 
/**
* 
*/
class Model_alamat extends CI_Model
{
	
	function lihatdata()
	{
		return $this->db->get_where('tb_alamat');
	}

	function get_one($id)
	{
		$param = array('id_alamat'=>$id);
  		return $this->db->get_where('tb_alamat',$param);
	}
}
 ?>
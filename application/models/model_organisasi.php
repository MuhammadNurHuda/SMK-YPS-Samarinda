<?php 
/**
* 
*/
class Model_organisasi extends CI_Model
{
	
	function lihatdata()
	{
		return $this->db->get_where('tb_organisasi');
	}

	function limit(){
		return $this->db->get('tb_organisasi', 1);
	}

	function get_one($id)
	{
		$param = array('id_organisasi'=>$id);
  		return $this->db->get_where('tb_organisasi',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_organisasi',$id);
		$this->db->update('tb_organisasi',$data);
	}
}
 ?>
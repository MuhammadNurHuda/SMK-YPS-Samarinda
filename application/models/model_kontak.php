<?php 
/**
* 
*/
class model_kontak extends CI_Model
{
	function limit(){
		return $this->db->get('tb_kontak', 4);
	}

	function lihatdata()
	{
		return $this->db->get_where('tb_kontak');
	}

	function get_one($id)
	{
		$param = array('kontak_id'=>$id);
  		return $this->db->get_where('tb_kontak',$param);
	}

	function delete($id)
	{
		$this->db->where('kontak_id',$id);
		$this->db->delete('tb_kontak');
	}
}

 ?>

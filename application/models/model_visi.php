<?php 
/**
* 
*/
class Model_visi extends CI_Model
{

	function lihatdata()
	{
		return $this->db->get_where('tb_visi');
	}

	function get_one($id)
	{
		$param = array('id_visi'=>$id);
  		return $this->db->get_where('tb_visi',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_visi',$id);
		$this->db->update('tb_visi',$data);
	}

	function delete($id)
	{
		$this->db->where('id_visi',$id);
		$this->db->delete('tb_visi');
	}
}

 ?>
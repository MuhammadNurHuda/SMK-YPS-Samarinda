<?php 
/**
* 
*/
class Model_galeri extends CI_Model
{
	
	function limit(){
		return $this->db->get('tb_galeri',3);
	}

	function lihatdata()
	{
		return $this->db->get_where('tb_galeri');
	}

	function post($data)
	{
		$this->db->insert('tb_galeri',$data);
	}

	function get_one($id)
	{
		$param = array('galeri_id'=>$id);
  		return $this->db->get_where('tb_galeri',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('galeri_id',$id);
		$this->db->update('tb_galeri',$data);
	}

	function delete($id)
	{
		$this->db->where('galeri_id',$id);
		$this->db->delete('tb_galeri');
	}
}

 ?>

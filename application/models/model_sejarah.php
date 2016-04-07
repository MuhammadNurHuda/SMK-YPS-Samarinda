<?php 
/**
* 
*/
class Model_sejarah extends CI_Model
{

	function lihatdata()
	{
		return $this->db->get_where('tb_sejarah');
	}

	function get_one($id)
	{
		$param = array('id_sejarah'=>$id);
  		return $this->db->get_where('tb_sejarah',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_sejarah',$id);
		$this->db->update('tb_sejarah',$data);
	}

	function delete($id)
	{
		$this->db->where('id_sejarah',$id);
		if ($this->db->delete('tb_sejarah')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
	}
}

 ?>

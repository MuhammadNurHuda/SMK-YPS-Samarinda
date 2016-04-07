<?php 
/**
* 
*/
class model_slide extends CI_Model
{
	
	function lihatdata()
	{
		return $this->db->get('tb_slide');
	}

	function get_one($id)
	{
		$param = array('id_gambar'=>$id);
  		return $this->db->get_where('tb_slide',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_gambar',$id);
		$this->db->update('tb_slide',$data);
	}

	function delete($id)
	{
		$this->db->where('id_gambar',$id);
		if ($this->db->delete('tb_slide')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data telah dihapus</div>');
		}
	}
}
 ?>
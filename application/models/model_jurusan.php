<?php 
/**
* 
*/
class Model_jurusan extends CI_Model
{
	function lihatdata()
	{
		return $this->db->get_where('tb_jurusan');
	}
	
	function get_one($id)
	{
		$param = array('id_jurusan'=>$id);
  		return $this->db->get_where('tb_jurusan',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_jurusan',$id);
		$this->db->update('tb_jurusan',$data);
	}

	function delete($id)
	{
		$this->db->where('id_jurusan',$id);
		$this->db->delete('tb_jurusan');
	}
}

 ?>

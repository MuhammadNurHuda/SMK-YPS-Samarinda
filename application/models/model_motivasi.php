<?php 
/**
* 
*/
class Model_motivasi extends CI_Model
{
	
	function lihatdata()
	{
		return $this->db->query('select *from tb_motivasi ORDER BY id_motivasi DESC limit 1');
	}

	function lihat_data()
	{
		return $this->db->get_where('tb_motivasi');
	}

	function get_one($id)
	{
		$param = array('id_motivasi'=>$id);
  		return $this->db->get_where('tb_motivasi',$param);
	}
}
 ?>
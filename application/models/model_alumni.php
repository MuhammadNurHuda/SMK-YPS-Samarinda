<?php 
class Model_alumni extends CI_Model
{
	
	function lihat_data()
	{
		$param = array('status' => '1');
		return $this -> db -> get_where('tb_alumni',$param);
	}

	function lihat_data1()
	{
		return $this->db->get_where('tb_alumni');
	}

	function publish($id)
	{
		return $this -> db -> query("UPDATE tb_alumni SET status = '1' WHERE id_alumni = $id");
	}

	function publish1($id)
	{
		return $this -> db -> query("UPDATE tb_alumni SET status = '0' WHERE id_alumni = $id");
	}

	function paging($halaman, $batas)
	{
		return $this->db->query("select *from tb_alumni where status = '1' ORDER BY nama_alumni ASC limit $halaman,$batas");
	}
	
}
 ?>
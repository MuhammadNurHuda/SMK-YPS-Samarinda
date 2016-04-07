<?php 
/**
* 
*/
class model_guru extends CI_Model
{
	
	function lihatdata()
	{
		$query = "Select *from tb_guru order by nama_guru ASC";
		return $this->db->query($query);
	}

	function tampilkan_data_paging($halaman,$batas)
  	{
      return $this->db->query("select *from tb_guru ORDER BY nama_guru ASC limit $halaman,$batas");
  	}

	function get_one($id)
	{
		$param = array('guru_id'=>$id);
  		return $this->db->get_where('tb_guru',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('guru_id',$id);
		$this->db->update('tb_guru',$data);
	}

	function delete($id)
	{
		$this->db->where('guru_id',$id);
		$this->db->delete('tb_guru');
	}

	function cari($keyword,$field)
	{
		$query = "Select *FROM tb_guru where $field like '%$keyword%'";
		return $this->db->query($query);
	}
}
 ?>
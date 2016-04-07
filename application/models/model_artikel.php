<?php 
/**
* 
*/
class model_artikel extends CI_Model
{
	function limit(){
		return $this->db->query('select *from tb_artikel ORDER BY artikel_id DESC limit 4');
	}

	function lihatdata()
	{
		return $this->db->get_where('tb_artikel');
	}

	function tampilkan_data_paging($halaman,$batas)
  	{
      return $this->db->query("select *from tb_artikel ORDER BY artikel_id DESC limit $halaman,$batas");
  	}

	function get_one($id)
	{
		$param = array('artikel_id'=>$id);
  		return $this->db->get_where('tb_artikel',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('artikel_id',$id);
		$this->db->update('tb_artikel',$data);
	}

	function delete($id)
	{
		$this->db->where('nama_file',$id);
		if ($this->db->delete('tb_artikel')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		
	}
}

 ?>

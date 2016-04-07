<?php 
/**
* 
*/
class Alamat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_alamat');
		cek();
	}

	function index()
	{
		$data['record']=$this->model_alamat->lihatdata();
		$this->template->load('template','alamat/lihat_data',$data);
	}

	function post()
	{
		$this->template->load('template','alamat/tambah_data');
	}

	function do_upload()
	{
		$alamat 	= $this->input->post('alamat');
		$email 		= $this->input->post('email');
		$notlp 		= $this->input->post('notlp');
		$data 		= array('alamat'=>$alamat,
							'email'=>$email,
							'notlp'=>$notlp
							);
		$this->db->insert('tb_alamat',$data);
		redirect('alamat');
	}

	function edit()
	{
		if(isset($_POST['submit'])) {
		$id 		= $this->input->post('id');
		$alamat 	= $this->input->post('alamat');
		$email 		= $this->input->post('email');
		$notlp 		= $this->input->post('notlp');
		$data 		= array('alamat'=>$alamat,
							'email'=>$email,
							'notlp'=>$notlp
							);
		$this->db->where('id_alamat',$id);
		$this->db->update('tb_alamat',$data);
		redirect('alamat');
		}
		else {
			$id 				= $this->uri->segment(3);
			$data['record'] 	= $this->model_alamat->get_one($id)->row_array();
			$this->template->load('template','alamat/form_edit',$data);
		}
	}

	function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_alamat',$id);
		$this->db->delete('tb_alamat');
		redirect('alamat');
	}
}
 ?>
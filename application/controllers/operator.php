<?php 
/**
* 
*/
class Operator extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_operator');
		cek();
	}

	function index()
	{
		$data['record']=$this->model_operator->tampildata();
		//$this->load->view('operator/lihat_data',$data);
		$this->template->load('template','operator/lihat_data',$data);

	}

	function post()
	{
		if(isset($_POST['submit'])){
			//proses data
			$nama 		= $this->input->post('nama_lengkap',true);
			$username 	= $this->input->post('username',true);
			$password 	= $this->input->post('password',true);
			$data 		= array('nama_lengkap'=>$nama,
								'username'=>$username,
								'password'=>$password); 
			if ($this->db->insert('operator',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
			}
			redirect('operator');
		}
		else
		{
			//$this->load->view('operator/form_input');
			$this->template->load('template','operator/form_input');
		}
	}

	function edit()
	{
		if(isset($_POST['submit'])){
			//proses kategori
			$id 		= $this->input->post('id',true);
			$nama 		= $this->input->post('nama_lengkap',true);
			$username 	= $this->input->post('username',true);
			$password 	= $this->input->post('password',true);
			if(empty($password)){
			$data 		= array('nama_lengkap'=>$nama,
								'username'=>$username); 
			}
			else {
			$data 		= array('nama_lengkap'=>$nama,
								'username'=>$username,
								'password'=>$password); 
			}
			$this->db->where('operator_id',$id);
			if ($this->db->update('operator',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
				
			}
			redirect('operator');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_operator->get_one($id)->row_array();
			//$this->load->view('operator/form_edit',$data);
			$this->template->load('template','operator/form_edit',$data);
		}
	}

	function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('operator_id',$id);
		if ($this->db->delete('operator')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('operator');
	}
}
 ?>
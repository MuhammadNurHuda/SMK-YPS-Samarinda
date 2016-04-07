<?php 	
/**
* 
*/
class slide extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_slide');
		cek();
	}

	function index()
	{
		$data['slide']=$this->model_slide->lihatdata();
		$this->template->load('template','slide/lihat_data',$data);
	}

	function post()
	{
		$this->template->load('template','slide/tambah_data');
	}

	function do_upload()
	{
		
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$title  = $this->input->post('title');
		$this->upload->do_upload();
		$hasil1		= $this->upload->data();
		$data  		= array('nama_file'=>$hasil1['file_name'],
							'title_file'=>$title
							);
		if ($this->db->insert('tb_slide',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('slide');
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$id 	= $this->input->post('id');
		$pict   = $this->input->post('pict');
		$title  = $this->input->post('title');
		if ($this->upload->do_upload()) {
			$hasil1		= $this->upload->data();
			$data  		= array('nama_file'=>$hasil1['file_name'],
							'title_file'=>$title
							);
		}
		else {
			$hasil1		= $this->upload->data();
			$data  		= array('nama_file'=>$pict,
							'title_file'=>$title
							);
			}
		$this->db->where('id_gambar',$id);
		if ($this->db->update('tb_slide',$data)) {
		$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('slide');
		}
		else {
			$id = $this -> uri -> segment(3);
			$data['record']=$this->model_slide->get_one($id)->row_array();
			$this->template->load('template','slide/edit_data',$data);
		}
	}

	function delete()
	{
		$id=$this->uri->segment(3);
		$tmp = 'uploads/';
		unlink($tmp.$id);
		$this->model_slide->delete($id);
		redirect('slide');
	}
}
		
?>

<?php 
/**
* 
*/
class Motivasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_motivasi');
		cek();
	}

	function index()
	{
		$data['record']=$this->model_motivasi->lihat_data();
		$this->template->load('template','motivasi/lihat_data',$data);
	}

	function post()
	{
		$this->template->load('template','motivasi/tambah_data');
	}

	function do_upload()
	{
		$isi 		= $this->input->post('isi_motivasi');
		$data 		= array('isi_motivasi'=>$isi
							);
		$this->db->insert('tb_motivasi',$data);
		redirect('motivasi');
	}

	function edit()
	{
		if(isset($_POST['submit'])) {
		$id 		= $this->input->post('id');
		$isi 		= $this->input->post('isi_motivasi');
		$data 		= array('isi_motivasi'=>$isi
							);
		$this->db->where('id_motivasi',$id);
		$this->db->update('tb_motivasi',$data);
		redirect('motivasi');
		}
		else {
			$id 				= $this->uri->segment(3);
			$data['record'] 	= $this->model_motivasi->get_one($id)->row_array();
			$this->template->load('template','motivasi/form_edit',$data);
		}
	}

	function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_motivasi',$id);
		$this->db->delete('tb_motivasi');
		redirect('motivasi');
	}
}
 ?>
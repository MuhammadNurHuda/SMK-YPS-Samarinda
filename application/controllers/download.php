<?php 
/**
* 
*/
class download extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_download','model_alamat'));
	}

	function index()
	{
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['download']=$this->model_download->lihatdata();
		$this->template->load('template(1)','front/lihat_download',$data);
	}

	function lakukan_download(){				
		force_download('uploads/google.jpg',NULL);
	}

	function cari_download()
	{
		$keyword = $this->input->post('keyword');
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['cari']=$this->model_download->cari($keyword);
		if ($data['cari']->num_rows() < 1) {
			$this->session->set_flashdata('msg','Kata pencarian "'.$keyword.'" tidak ditemukan');
		}
		else
		{	
			$this->session->set_flashdata('msg','');
		}
		$this->template->load('template(1)','front/lihat_download_cari',$data);
	}
}
 ?>
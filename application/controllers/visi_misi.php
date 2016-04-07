<?php 
/**
* 
*/
class Visi_misi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_visi','model_alamat'));
	}

	function index()
	{		
		$data['misi']=$this->model_visi->lihatdata();
		$data['alamat']=$this->model_alamat->lihatdata();
		$this->template->load('template(1)','front/lihat_misi',$data);
	}
}
 ?>
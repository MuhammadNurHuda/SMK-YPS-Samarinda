<?php 
/**
* 
*/
class Organisasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_organisasi','model_alamat'));
	}

	function index()
	{	
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['organisasi']=$this->model_organisasi->limit();
		$this->template->load('template(1)','front/lihat_organisasi',$data);
	}
}
 ?>
<?php 
/**
* 
*/
class galeri extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_galeri','model_alamat'));
	}

	function index()
	{	
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['galeri']=$this->model_galeri->lihatdata();
		$this->template->load('template(1)','front/lihat_galeri',$data);
	}
}
 ?>
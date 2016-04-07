<?php 
/**
* 
*/
class jurusan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_jurusan','model_alamat'));
	}

	function index()
	{
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['jurusan']=$this->model_jurusan->lihatdata();
		$this->template->load('template(1)','front/lihat_jurusan',$data);
	}
}
 ?>
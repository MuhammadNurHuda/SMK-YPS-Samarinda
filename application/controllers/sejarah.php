<?php 
/**
* 
*/
class Sejarah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_sejarah','model_alamat'));
	}

	function index()
	{
		$data['alamat']	=$this->model_alamat->lihatdata();
		$data['sejarah']=$this->model_sejarah->lihatdata();
		$this->template->load('template(1)','front/lihat_sejarah',$data);
	}
}
 ?>
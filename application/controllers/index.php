<?php 
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_artikel','model_jurusan','model_slide','model_alamat','model_motivasi'));
	}

	function index()
	{
		
			$data['artikel'] = $this->model_artikel->limit();
			$data['rekor']= $this->model_motivasi->lihatdata();
			$data['slide']=$this->model_slide->lihatdata();
			$data['jurusan']=$this->model_jurusan->lihatdata();
			$data['alamat']=$this->model_alamat->lihatdata();
			$data['motivasi']= $this->model_motivasi->lihatdata();
			$this->template->load('template(1)','view_dashboard1',$data);								
		
								
	}
}
 ?>
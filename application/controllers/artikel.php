<?php 
/**
* 
*/
class Artikel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_artikel','model_alamat'));
	}

	function index()
	{
		$this->load->library('pagination');
        $config['base_url'] 	= base_url().'index.php/artikel/';
        $config['total_rows'] 	= $this->model_artikel->lihatdata()->num_rows();
        $config['per_page'] 	= 4; 
        $this->pagination->initialize($config); 
        $data['paging']     	=$this->pagination->create_links();
        $halaman            	=$this->uri->segment(3);
        $halaman            	=$halaman==''?0:$halaman;
		$data['record']=$this->model_artikel->limit();
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['artikel']=$this->model_artikel->tampilkan_data_paging($halaman,$config['per_page']);
		$this->template->load('template(1)','front/lihat_artikel',$data);
	}

	function artikel_detail()
	{
		$id = $this->uri->segment(3);
		$data['record']	=$this->model_artikel->limit();
		$data['alamat']	=$this->model_alamat->lihatdata();
		$data['artikel']=$this->model_artikel->get_one($id)->row_array();
		$this->template->load('template(1)','front/lihat_artikel_detail',$data);

	}
}
 ?>
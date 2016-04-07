<?php 
/**
* 
*/
class guru extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_guru','model_alamat'));
	}

	function index()
	{
		$this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/front/guru/';
        $config['total_rows'] = $this->model_guru->lihatdata()->num_rows();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =$this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['guru']=$this->model_guru->tampilkan_data_paging($halaman,$config['per_page']);
		$this->template->load('template(1)','front/lihat_guru',$data);
	}

	function cari_guru()
	{
		$keyword = $this->input->post('keyword');
		$field 	 = $this->input->post('field');
		if ($field == 'nip') {
			$field = 'nip_guru';
		}
		elseif ($field == 'nama') {
			$field == 'nama_guru';
		}
		else {
			$field == 'mata_pelajaran';
		}
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['cari']=$this->model_guru->cari($keyword,$field);
		if ($data['cari']->num_rows() < 1) {
			$this->session->set_flashdata('msg','Kata pencarian "'.$keyword.'" tidak ditemukan');
		}
		else
		{	
			$this->session->set_flashdata('msg','');
		}
		$this->template->load('template(1)','front/lihat_guru_cari',$data);
	}

	function guru_detail()
	{
		$id = $this->uri->segment(3);
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['guru']=$this->model_guru->get_one($id)->row_array();
		$this->template->load('template(1)','front/lihat_guru_detail',$data);
	}
}
 ?>
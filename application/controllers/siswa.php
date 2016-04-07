<?php 
/**
* 
*/
class siswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_siswa','model_alamat'));
	}

	function index()
	{
		$this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/front/siswa/';
        $config['total_rows'] = $this->model_siswa->lihatdata()->num_rows();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =$this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['siswa']     =$this->model_siswa->tampilkan_data_paging($halaman,$config['per_page']);
		$data['alamat']=$this->model_alamat->lihatdata();
		$this->template->load('template(1)','front/lihat_siswa',$data);

	}

	function cari_siswa()
	{
		$jurusan = $this->input->post('jurusan');
		$kelas 	 = $this->input->post('kelas_siswa');
		if ($kelas == 'kelas_siswa') {
			$kelas = 'kelas_siswa';
		}
		elseif ($jurusan == 'jurusan') {
			$jurusan == 'jurusan';
		}
		$data['alamat']=$this->model_alamat->lihatdata();
		$data['siswa']=$this->model_siswa->cari($jurusan,$kelas);
		if ($data['siswa']->num_rows() < 1) {
			$this->session->set_flashdata('msg','Kata pencarian untuk kelas "'.$kelas.'" dan jurusan "'.$jurusan.'" tidak ditemukan');
		}
		else
		{	
			$this->session->set_flashdata('msg','');
		}
		$this->template->load('template(1)','front/lihat_siswa_cari',$data);
	}
}
 ?>
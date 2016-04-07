<?php 
/**
 * 
 */
 class alumni extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
		$this->load->model(array('model_alumni','model_alamat'));
 	}

 	function index()
	{
		$this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/alumni/';
        $config['total_rows'] = $this->model_alumni->lihat_data1()->num_rows();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =$this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
		$data['alamat'] =$this->model_alamat->lihatdata();
		$data['record'] = $this->model_alumni->lihat_data();
		$data['record'] = $this->model_alumni->paging($halaman, $config['per_page']);
		$this->template->load('template(1)','front/lihat_alumni',$data);
	}


	function info_alumni()
	{
		$data['alamat']	= $this->model_alamat->lihatdata();
		$data['record'] = $this->model_alumni->lihat_data();
		$this->template->load('template(1)','front/info_alumni',$data);
		
	}

	function daftar_alumni()
	{
		if (isset($_POST['submit'])) {
			$this -> form_validation -> set_rules('name','Nama Lengkap','required|callback_alpha_space_only');
			$this -> form_validation -> set_rules('tempat','Tempat','required|alpha');
			$this -> form_validation -> set_rules('alamat','Alamat','required');
			$this -> form_validation -> set_rules('date','tgl','required');
			$this -> form_validation -> set_rules('jk','Jenis Kelamin','required');
			$this -> form_validation -> set_rules('nisn','NISN','required|min_length[10]');
			$this -> form_validation -> set_rules('tahun','Tahun','required|numeric|min_length[4]');
			$this -> form_validation -> set_rules('alm_kerja','Alamat Kerja','required');
			$this -> form_validation -> set_rules('captcha','Captcha','callback_cek_captcha');
			$this -> form_validation -> set_rules('alm_kuliah','Alamat Kuliah','required');
			$this -> form_validation -> set_rules('tlp','Telepon','required|numeric|min_length[12]');
			$this -> form_validation -> set_rules('email','Email','required|valid_email');
			if ($this -> form_validation -> run() == FALSE) {
				$this -> template -> load('template(1)','front/daftar_alumni',array('img'=> $this->create_captcha(),'alamat' => $this->model_alamat->lihatdata(),'record'=>$this->model_alumni->lihat_data()));
			}
			else {
			$nama  		= $this -> input -> post('name');
			$tmpat 		= $this -> input -> post('tempat');
			$tgl		= $this -> input -> post('date');
			$jk			= $this -> input -> post('jk');
			$agama 		= $this -> input -> post('agama');
			$alamat     = $this -> input -> post('alamat');
			$nisn		= $this -> input -> post('nisn');
			$tahun      = $this -> input -> post('tahun');
			$alm_kerja	= $this -> input->post('alm_kerja');
			$alm_kuliah	= $this -> input->post('alm_kuliah');
			$no  		= $this->input->post('tlp');
			$email      = $this->input->post('email');
			$data 		= array('nama_alumni' 	=> $nama,
								'tmpat_lhr'   	=> $tmpat,
								'tgl_lhr'		=> $tgl,
								'jk_alumni'		=> $jk,
								'agama_alumni'  => $agama,
								'alamat_alumni'	=> $alamat,
								'nisn_alumni'	=> $nisn,
								'thn_lulus_alumni'=>$tahun,
								'alm_kerja_alumni'=>$alm_kerja,
								'alm_un_kuliah_alumni'=>$alm_kuliah,
								'tlp_alumni'	=> $no,
								'email'			=> $email,
								'status'		=> '0');
			if ($this -> db -> insert('tb_alumni',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Pendaftaran Anda Akan Diproses</div>');
			redirect('alumni/daftar_alumni');
			}
		}
		
	}
	else {
			$this -> template -> load('template(1)','front/daftar_alumni',array('img'=> $this->create_captcha(),'alamat' => $this->model_alamat->lihatdata(),'record'=>$this->model_alumni->lihat_data()));
		}
	}

	function create_captcha()
	{
		$option = array('img_path'=>'./captcha/',
						'img_url'=>base_url('captcha'),
						'img_width'=>'150',
						'img_height'=>'40',
						'expiration'=>7200
						);
		$cap 	= create_captcha($option);
		$image 	= $cap['image'];

		$this->session->set_userdata('captchaword',$cap['word']);

		return $image;
	}

	function cek_captcha()
	{
		if ($this->input->post('captcha') == $this->session->userdata('captchaword')) {
			return true;
		}
		else {
			$this->form_validation->set_message('cek_captcha','Captcha is wrong');
			return false;
		}
	}

	function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'Nama tidak boleh mengandung unsur simbol');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
	}
 }
?>
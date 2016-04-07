<?php 
/**
* 
*/
class kontak extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_kontak','model_alamat'));
	}

	function index()
	{	
		$this->template->load('template(1)','front/lihat_kontak',array('img'=>$this->create_captcha(),
																	   'alamat'=>$this->model_alamat->lihatdata()));
	}

	function validasi()
    {
    	$this->form_validation->set_rules('captcha','Captcha','trim|callback_cek_captcha|required');
    	$this->form_validation->set_rules('name', 'Name','trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE)
        {
			$this->template->load('template(1)','front/lihat_kontak',array('img'=>$this->create_captcha(),
																	   	   'alamat'=>$this->model_alamat->lihatdata()));
        }
        else
        {
        $nama       = $this->input->post('name');
        $email      = $this->input->post('email');
        $subject    = $this->input->post('subject');
        $message    = $this->input->post('message');
        $data       = array('nama'=>$nama,
                            'email'=>$email,
                            'subject'=>$subject,
                            'message'=>$message
                            );
        if ($this->db->insert('tb_kontak',$data)) {
            $this->session->set_flashdata('msg','<div class="alert alert-success"><p align="center">Berhasil</p></div>');
        }
        else
        {   
            $this->session->set_flashdata('msg','<div class="alert alert-danger"><p align="center">Gagal</p></div>');
        }
        redirect ('kontak');
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
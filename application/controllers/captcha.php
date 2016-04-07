<?php 
class Captcha extends CI_Controller {
	
	function index(){
		$this->load->helper(array('captcha','form'));
		$this->load->library('session');
		$vals = array(
			'img_path' => './capimg/',
			'img_url' => '/captcha/capimg/',
			'img_width' => 150,
			'img_height' => 30
		);
		$cap = create_captcha($vals);
		$this->session->set_userdata('keycode',md5($cap['word']));
		$data['captcha_img'] = $cap['image'];
		$this->template->load('template(1)','front/lihat_kontak',$data);
	}
	
	function submit(){
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$captcha = $this->input->post('captcha');
		if(md5($captcha)==$this->session->userdata('keycode')){
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');
			$this->template->load('template(1)','front/lihat_kontak',$data);
		}else{
			redirect('captcha?cap_error=1','refresh');
		}
	}
}
 ?>
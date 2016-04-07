<?php 
/**
* 
*/
class Auth extends CI_Controller
{
	
	function __construct() 
	{
		parent::__construct();
		$this->load->model('model_operator');
		
	}

	function login()
	{
		if(isset($_POST['submit']))
		{
			$data = array('username'=>$this->input->post('username'),'password'=>$this->input->post('password'));
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$hasil=$this->model_operator->login($username,$password);
			if($hasil==1)
			{
				$this->db->where('username',$username);
				$this->db->update('operator',array('last_login'=>date('Y-m-d')));
				$this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
				$cari = $this->model_operator->cek_login($data);
				if($cari -> num_rows() == 1)
					foreach ($cari-> result() as $sess) {
						$sess_data['nama_lengkap']=$sess->nama_lengkap;
						$this->session->set_userdata($sess_data);
				}
				redirect ('admin/login',$data);
			}
			else {
				redirect('auth/login');
			}
		}
			else {
				$this->template->load('form_login2','form_login');

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect ('auth/login');
	}
}
 ?> 
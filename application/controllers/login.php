<?php 
/**
* 
*/
class login extends CI_Controller
{
		function __construct() {
		parent::__construct();
		cek();
	}
		function index(){
			//$this->load->view('view_dashboard');
			$this->template->load('template','view_dashboard');			
		}
	}
 ?>
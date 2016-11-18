<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/M_auth');
	}
	
	
	public function index()
	{
		if($this->session->super_login==1)
		{
			redirect('super/auth/dashboard');
		}
		else redirect('super/auth/login');
	}
	
	public function login()
	{
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		$this->load->view('super/log_in',$data);
	}
	
	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if($username == 'jonsnow')
		{
			if(hash('sha256',$password) == '7b902a310e0ba8ffbdb6bd242b3a654e32fe51d8cfc80637623e323c755a1c51')
			{
				$this->session->super_login = 1;
				redirect('super/auth/index');
			}
			else
			{
				redirect('super/auth/login');
			}
		}
		else
		{
			redirect('super/auth/login');
		}
	}
	
	public function dashboard()
	{
		if($this->session->super_login==1)
		{
			$data['header']=$this->load->view('super/parts/header','',true);
			$data['navbar']=$this->load->view('super/parts/navbar','',true);
			$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
			$data['footer']=$this->load->view('super/parts/footer','',true);
			$this->load->view('super/dashboard',$data);
		}
		else redirect('super/auth/login');
	}
	
	
	
}

?>

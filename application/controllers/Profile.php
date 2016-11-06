<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Profile');
	}

	public function index($username='blank')
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		
		#get User_login information untuk di compare di view
		$user_profile   = $this->session->userdata('userdata');  
		$data['user_login'] = $user_profile[0];
		
		#jika blank maka profile dia sendiri
		if($username =='blank')
		{
			$username = $user_profile[0]->username_u;
		}
		
		#get data profile tujuan
		$data['userdata'] = $this->M_Profile->get_data_username($username);
		
		$this->load->view('profile/index',$data);
	}
	
	public function set_in()
	{
		$this->session->logged_in = 1;
		$mydata = $this->M_Profile->get_data($this->session->userdata('id_u'));
		$this->session->set_userdata('userdata', $mydata); 
		
		#how to get userdata
		/*
			controller
			$user_profile   = $this->session->userdata('userdata');  
			$data['user'] = $user_profile[0];
			echo $data['user']->username_u;
			
			view
			
			$this->load->view('profile/profile-password',$data); <! Jangan lupa masukin $data !>
			echo $user->username_u 
		*/
		
		redirect('/profile');
	}
	public function logging_out()
	{
		session_destroy();
		$this->session->logged_in = 0;
		redirect('Welcome');
	}
}

?>

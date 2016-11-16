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
	
	
	private function get_book_user($id, $page,$per_page)
	{
		$start = ($page-1)*$per_page;
		$user_book = $this->M_Profile->get_user_book($id,$start,$per_page);
		return $user_book;
	}
	
	private function get_all_book_user($id, $page,$per_page)
	{
		$user_book = $this->M_Profile->get_all_book_user($id);
		$page_total = $user_book[0]->count/$per_page;
		return  ceil($page_total);
	}
	
	public function index($username='blank')
	{
		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;
		
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		
		#get User_login information untuk di compare di view
		$user_profile   = $this->session->userdata('userdata');  
		$data['user_login'] = $user_profile[0];
		#print_r ($this->session->userdata('userdata'));
		
		#jika blank maka profile dia sendiri
		if($username =='blank')
		{
			if($this->session->logged_in==0)
			{
				redirect('/');
			}
			else
			{
				$username = $user_profile[0]->username_u;
				redirect('/profile/'.$username);
			}
		}
		
		#get data profile tujuan
		$data['userdata'] = $this->M_Profile->get_data_username($username);
		$data['username_now']=$username;
		
		
		#get book data
		$per_page=12;
		$data['book_user']=$this->get_book_user($data['userdata'][0]->id_u,$page,$per_page);
		$data['page_now']=$page;
		$data['page_total']=$this->get_all_book_user($data['userdata'][0]->id_u,$page,$per_page);
		
		
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

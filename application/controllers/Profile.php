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
		$this->load->model('M_auth');
		$this->load->model('M_book');
		$this->load->model('M_category');
	}

	public function index($username='blank')
	{
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('profile/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

		#get User_login information untuk di compare di view
		$user_profile   = $this->session->userdata('userdata');
		$data['user_login'] = $user_profile[0];

		#jika blank maka profile dia sendiri
		if($username =='blank')
		{
			$username = $user_profile[0]->username_u;
			if($this->session->logged_in==0)
			{
				redirect('/login');
			}
		}

		#get data profile tujuan
		$data['userdata'] = $this->M_Profile->get_data_username($username);
		$id = $data['userdata'][0]->id_u;

		//ADD TO LOG_VISIT
		if($this->session->logged_in == 1){
			$temp = $this->session->userdata('userdata');
			$id_user = $temp[0]->id_u;

			$add_log = $this->M_auth->add_log_view($id_user, 'profile', $id);
		}
		else{
			$ip = $this->input->ip_address();

			$add_log = $this->M_auth->add_log_view($ip, 'profile', $id);
		}

		$data['review_total'] = count($this->M_book->get_my_review($id));

		#get book profile
		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;

		$limit=24;
		$offset = ($page-1)*$limit;
		$data['page_now']=$page;

		$data['books'] = $this->M_Profile->get_books_user($id,$limit,$offset);
		$count_books = $this->M_Profile->count_all_books_user($id);
		$data['book_total'] = $count_books;
		$data['page_total'] = ceil($count_books/$limit);


		$data['page_title'] = $username;
		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['content'] = $this->load->view('profile/index',$data,true);
		$this->load->view('template',$data);

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

	}
	public function logging_out()
	{
		session_destroy();
		$this->session->logged_in = 0;
		redirect('Welcome');
	}
}

?>

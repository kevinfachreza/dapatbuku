<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));
		$this->load->model('M_auth');
		$this->load->model('M_book');
		$this->load->model('M_Banner');
		$this->load->model('M_Profile');
		$this->load->model('M_category');

	}

	public function index()
	{
		$data['nav_category'] = $this->M_category->get_all_category();

		$data['new_release']	 = $this->M_book->get_n_release();
		$data['best_sell'] 		 = $this->M_book->get_b_seller();
		$data['banner']			 = $this->M_Banner->getBanner();
		if($this->session->logged_in == 1){
			$temp = $this->session->userdata('userdata');
			$id_user = $temp[0]->id_u;

			$add_log = $this->M_auth->add_log_view($id_user, 'home', '0');
		}
		else{
			$ip = $this->input->ip_address();

			$add_log = $this->M_auth->add_log_view($ip, 'home', '0');
		}

		if($add_log){
			if($this->session->flashdata('register') != null){
				$data['register'] = 1;
			}
			else{
				$data['register'] = 0;
			}

			$data['page_title'] = 'DapatBuku - Cari Buku Jadi Lebih Mudah';
			$data['header'] = $this->load->view('home/header', $data,true);;
			$data['navbar'] = $this->load->view('parts/navbar', $data,true);
			$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
			$data['footer'] = $this->load->view('parts/footer','',true);
			$data['content'] = $this->load->view('home/home',$data,true);
			$this->load->view('template',$data);
		}
		else{
			echo "GAGAL";
		}
	}

	public function aboutus()
	{
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['page_title'] = 'DapatBuku - Cari Buku Jadi Lebih Mudah';
		$data['header'] = $this->load->view('home/header', $data,true);;
		$data['navbar'] = $this->load->view('parts/navbar', $data,true);
		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['footer'] = $this->load->view('parts/footer','',true);
		$data['content'] = $this->load->view('home/about_us',$data,true);
		$this->load->view('template',$data);
	}

}

?>

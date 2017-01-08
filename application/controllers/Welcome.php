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
		$this->load->model('M_book');
		$this->load->model('M_Banner');
		$this->load->model('M_Profile');
	}

	public function index()
	{
		$data['new_release']	 = $this->M_book->get_n_release();
		$data['best_sell'] 		 = $this->M_book->get_b_seller();
		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar','',true);
		$data['footer']			 = $this->load->view('parts/footer','',true);
		$data['banner']			 = $this->M_Banner->getBanner();
		
		$this->load->view('home/index',$data);
	}

}

?>

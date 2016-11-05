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
	}

	public function index()
	{
		$data_pass['best_sell'] = $this->M_book->get_b_seller();

		$data_pass['header']=$this->load->view('parts/header','',true);
		$data_pass['navbar']=$this->load->view('parts/navbar','',true);
		$data_pass['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('home/index',$data_pass);
	}

}

?>

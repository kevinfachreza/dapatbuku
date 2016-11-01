<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	 
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->helper(array('form', 'url')); 
	}
	
	public function index()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('category/category',$data);
	}
}

?>
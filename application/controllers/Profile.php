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

	public function index()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		//$data['user_name'] = $this->M_auth->get_data($this->sess)
		$this->load->view('home/index',$data);
	}

	public function container()
	{
		$this->load->view('home/carousel-container');
	}

	public function set_in()
	{
		$this->session->logged_in = 1;
		$mydata = $this->M_Profile->get_data($this->session->userdata('id_u'));

		$newdata = array(
					$newdata['name_in'] => $mydata[0]['firstname_u'],
					$newdata['point_in'] => $mydata[0]['point'],
					$newdata['money_in'] => $mydata[0]['money']
		);
		$this->session->set_userdata('my_name', $newdata['name_in']);


		redirect('Profile');
	}
	public function logging_out()
	{
		session_destroy();
		$this->session->logged_in = 0;
		redirect('Welcome');
	}
}

?>

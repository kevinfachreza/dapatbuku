
	
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

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
		redirect('accounts/settings');
	}
	
	public function settings($name='index')
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		
		if($name == 'change-password')
		{
			$this->load->view('profile/profile-password',$data);
		}
		else if($name == 'book')
		{
			redirect('profile/book');
		}
		else if($name =='index')
		{
			$this->load->view('profile/profile-edit',$data);
		}
	}
}

?>

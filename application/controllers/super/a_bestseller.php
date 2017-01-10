<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_bestseller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/MA_bestseller');
	}

	public function index()
	{
		if($this->session->super_login==1)
		{
			redirect('super/a_bestseller/edit');
		}
		else redirect('super/auth/login');
	}

	public function edit()
	{

		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		$this->load->view('super/bestseller/edit',$data);
	}
	public function do_edit()
	{
		$no = $this->input->post('no[]');
		#print_r($no);

		$report = $this->MA_bestseller->empty();
		if($report)
		{
			for($i=0;$i<10;$i++)
			{
				$id = $no[$i];
				$j = $i+1;
				$report = $this->MA_bestseller->edit($id,$j);
			}
		}
		redirect('super/auth');
	}
}

?>

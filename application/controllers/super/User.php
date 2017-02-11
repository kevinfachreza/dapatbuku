<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/M_user');
	}


	public function index()
	{
		if($this->session->super_login==1)
		{
			redirect('super/auth/dashboard');
		}
		else redirect('super/auth/login');
	}

  public function RequestUser()
	{
    if($this->session->super_login != 1){
      redirect('super/auth/login');
    }
    else{
      if($this->input->get('page')!=null)
  		{
  			$page = $this->input->get('page');
  		}
  		else $page=1;

  		$limit=20;
  		$offset = ($page-1)*$limit;
  		$data['page_now']=$page;

  		$data['header']=$this->load->view('super/parts/header','',true);
  		$data['navbar']=$this->load->view('super/parts/navbar','',true);
  		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
  		$data['footer']=$this->load->view('super/parts/footer','',true);

  		$data['book'] = $this->M_user->getRequestUser($limit, $offset);
  		$count_books = $this->M_user->countRequestUser();
  		$data['page_total'] = ceil($count_books/$limit);

  		$this->load->view('super/requestuser/request_user',$data);
    }
	}

  public function ConfirmRequest(){
    $id_in = $this->input->get('buku');
    $status = $this->input->get('status');
    $result = $this->M_user->ConfirmRequest($id_in, $status);

    if($result){
      $this->session->set_flashdata('report', 'Buku Sukses dikonfirmasi');
    }
    else{
      $this->session->set_flashdata('report', 'Konfirmasi buku Gagal');
    }
    redirect('super/user/RequestUser');
  }


}

?>

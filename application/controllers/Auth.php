<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->library('fixstring');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));
    $this->load->model('M_auth');
  }

  public function login()
  {
    $data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('auth/login', $data);
  }


  public function do_login(){
    $this->form_validation->set_rules('log-user_in', 'user_in', 'trim|required');
    $this->form_validation->set_rules('log-pass', 'Password', 'trim|required');

    $user_in = $this->input->post('log-user_in');
    $pass = $this->input->post('log-pass');

    $result = $this->M_auth->login($user_in, $pass);


    if($result){
	$id = $result[0]->id_u;
      $newdata = array(
        'id_u' => $id
      );
      $this->session->set_userdata($newdata);
      redirect(base_url().'profile/set_in');
    }
    else{
		echo 'salah';
    }
  }

  public function register(){
    $data['header']=$this->load->view('parts/header','',true);
    $data['navbar']=$this->load->view('parts/navbar','',true);
    $data['footer']=$this->load->view('parts/footer','',true);
    $this->load->view('auth/register', $data);
  }


  public function do_register(){
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    $this->form_validation->set_rules('reg-email', 'Email', 'required|valid_email');

    $this->form_validation->set_rules('reg-name', 'Username', 'required');

    $this->form_validation->set_rules('reg-date', 'Date_of_Birth', 'required');

    $this->form_validation->set_rules('reg-pass', 'Password', 'required');

    $em = $this->input->post('reg-email');
    $name = $this->input->post('reg-name');
    $date = $this->input->post('reg-date');
    $pass = $this->input->post('reg-pass');

    if($this->form_validation->run() == FALSE){
      //redirect('Welcome');
    }

    else{
      $result = $this->M_auth->register($em, $name, $date, $pass);
      if($result){
        mkdir("assets/img/user/".$result);
        mkdir("assets/img/user/".$result."/books");
        mkdir("assets/img/user/".$result."/profile-pict");
        redirect('Welcome');
      }
      else {
        echo "SALAH";
      }
    }
  }

}
 ?>

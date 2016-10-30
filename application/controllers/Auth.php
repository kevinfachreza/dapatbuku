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

  public function login_index()
  {
    $data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('v_login');
  }

  public function do_login(){
    $this->form_validation->set_rules('log-user_in', 'user_in', 'trim|required');
    $this->form_validation->set_rules('log-pass', 'Password', 'trim|required');

    $user_in = $this->input->post('log-user_in');
    $pass = $this->input->post('log-pass');

    $result = $this->M_auth->login($user_in, $pass);

    if($result){
      $newdata = array(
        'id_u' => $result
      );
      $this->session->set_userdata($newdata);
      redirect(base_url().'Profile/set_in');
    }
    else{

      $this->load->view('v_login', $result);
    }
  }

  public function do_register(){
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    $this->form_validation->set_rules('reg-email', 'Email', 'required|valid_email');

    $this->form_validation->set_rules('reg-name', 'Username', 'required');

    $this->form_validation->set_rules('reg-date', 'Date_of_Birth', 'required');

    $this->form_validation->set_rules('reg-pass', 'Password', 'required');

    if($this->form_validation->run() == FALSE){
      //redirect('Welcome');
      $em = $this->input->post('reg-email');
      $name = $this->input->post('reg-name');
      $date = $this->input->post('reg-date');
      $pass = $this->input->post('reg-pass');
      echo $em;
      echo $name;
      echo $date;
      echo $pass;
      echo "GAGAL";
    }
    else{
      echo "SINI";
      $data_in = array(
        'email_u' => $this->input->post('reg-email'),
        'username_u' => $this->input->post('reg-name'),
        'date_of_birth_u' => $this->input->post('reg-date'),
        'password_u' => $this->input->post('reg-pass')
      );
      $result = $this->M_auth->register($data_in);
      if($result){
        echo "SUKSES";
      }
      else {
        redirect('Welcome');
      }
    }
  }

  public function register(){
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    $this->form_validation->set_rules('userin', 'Username', 'required');

    $this->form_validation->set_rules('emailin', 'Email', 'required|valid_email');

    $this->form_validation->set_rules('passin', 'Password', 'required');

    $this->form_validation->set_rules('fnamein', 'First name', 'required');

    $this->form_validation->set_rules('birthin', 'Date of Birth', 'required');

    $this->form_validation->set_rules('phonein', 'Phone number', 'required');

    $this->form_validation->set_rules('addressin', 'Address', 'required');

    $this->form_validation->set_rules('cityin', 'City', 'required');

    $this->form_validation->set_rules('bioin', 'Biodata', 'required');

    if($this->form_validation->run() == FALSE){
      $this->load->view('welcome');
    }
    else{
      $datain = array(
        'username_u'  => $this->input->post('userin'),
        'email_u'     => $this->input->post('emailin'),
        'password_u'  => $this->input->post('passin'),
        'firstname_u' => $this->input->post('fnamein'),
        'surname_u'   => $this->input->post('snamein'),
        'date_of_birth_u' =>  $this->input->post('birthin'),
        'phone_number_u'  =>  $this->input->post('phonein'),
        'address_u'   =>  $this->input->post('addressin'),
        'city_u'      =>  $this->input->post('cityin'),
        'bio_u'       =>  $this->input->post('bioin')
      );
      //Transfer to Model
      $this->M_auth->register($datain);
      $datain['message'] = 'Data Inserted succesfully';

      //Load view
      $this->load->view('register');
    }
  }

}
 ?>

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
    $this->load->model('M_book');
    $this->load->library('bcrypt');
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
    #$pass = $this->bcrypt->hash_password($pass);
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
		  $this->session->set_flashdata('warning', 'Email atau password salah');
      redirect('auth/login');
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

    $pass = $this->bcrypt->hash_password($pass);

    if($this->form_validation->run() == FALSE){
      //redirect('Welcome');
    }
    $check = $this->M_auth->check_register($em, $name);

    if($check == '2'){
      $this->session->set_flashdata('warning', 'Maaf Email sudah terdaftar');
      redirect('Auth/register');
    }
    else if($check == '3'){
      $this->session->set_flashdata('warning', 'Maaf Username sudah terdaftar, gunakan username yang lain');
      redirect('Auth/register');
    }
    else {
        $result = $this->M_auth->register($em, $name, $date, $pass);
        if($result){
          mkdir("assets/img/user/".$name);
          mkdir("assets/img/user/".$name."/books");
          mkdir("assets/img/user/".$name."/profile-pict");
          $this->session->set_flashdata('register', 'done');
          redirect('Welcome');
        }
        else{
            $this->session->set_flashdata('warning', 'Registrasi gagal, silahkan coba lagi');
        }
    }
  }

  public function contact_us(){
    $data['header']=$this->load->view('parts/header','',true);
    $data['navbar']=$this->load->view('parts/navbar','',true);
    $data['footer']=$this->load->view('parts/footer','',true);
    $this->load->view('auth/contact_us', $data);
  }

  public function do_contact_us(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $message = $this->input->post('message');
    // The mail sending protocol.
    $config['protocol'] = 'smtp';
    // SMTP Server Address for Gmail.
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    // SMTP Port - the port that you is required
    $config['smtp_port'] = 465;
    // SMTP Username like. (abc@gmail.com)
    $config['smtp_user'] = 'dapatbuku1@gmail.com';
    // SMTP Password like (abc***##)
    $config['smtp_pass'] = '12log12=1';

    $config['mailtype'] = 'html';
    $config['starttls'] = 'true';
    // Load email library and passing configured values to email library
    $this->load->library('email', $config);
    // Sender email address
    $this->email->set_newline("\r\n");
    $this->email->from($email, $name);
    // Receiver email address.for single email
    $this->email->to('dapatbuku1@gmail.com');
    // Subject of email
    $this->email->subject('CONTACTUS@dapatbuku.com');
    // Message in email
    $this->email->message($message);
    // It returns boolean TRUE or FALSE based on success or failure
    if($this->email->send())
    {
      redirect('contactus');
    }
    else {
      show_error($this->email->print_debugger());
    }
  }

  public function book_request(){
    $data['header']=$this->load->view('parts/header','',true);
    $data['navbar']=$this->load->view('parts/navbar','',true);
    $data['footer']=$this->load->view('parts/footer','',true);
    $this->load->view('auth/book_request', $data);
  }

  public function do_book_request(){
    $title = $this->input->post('title');
    $category = $this->input->post('category');
    $author = $this->input->post('author');

    $data_request = array($title, $category, $author);

    $result = $this->M_book->insert_request($data_request);

    if($result) redirect('auth/book_request');
    else {
      echo "GAGAL";
    }
  }

}
 ?>

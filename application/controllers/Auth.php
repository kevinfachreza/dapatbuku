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
    $this->load->model('M_category');
    $this->load->model('M_Profile');
  }

  public function login()
  {
    $data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);
		$this->load->view('auth/login', $data);
  }


  public function do_login(){
    $sale = $this->input->get('sale');
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

      $this->session->logged_in = 1;
  		$mydata = $this->M_Profile->get_data($this->session->userdata('id_u'));
  		$this->session->set_userdata('userdata', $mydata);

      $add_counter = $this->M_auth->add_login_counter($id);
      if($sale){
        redirect('mybooks/add');
      }
      else{
        redirect('/profile');
      }
    }
    else{
		  $this->session->set_flashdata('warning', 'Email atau password salah');
      redirect('auth/login');
    }
  }

  public function register(){
    $data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

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

  private function emptyElementExists($arr) {
	  return array_search("", $arr) !== false;
	}

  public function contact_us(){
    if($this->session->logged_in == 1){
      $check = $this->M_book->checknullprofile($this->session->userdata('id_u'));

      if($this->emptyElementExists($check)){
        $this->session->set_flashdata('profile_report', 'Maaf kamu harus mengisi biodata terlebih dahulu');
        redirect('Accounts/settings');
      }
    }

    $data['nav_category'] 		= $this->M_category->get_all_category();

    $data['header']			 = $this->load->view('parts/header','',true);
    $data['navbar']			 = $this->load->view('parts/navbar', $data,true);
    $data['footer']			 = $this->load->view('parts/footer','',true);


    $data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
    $data['header'] = $this->load->view('profile/header','',true);
    $data['page_title'] = 'Hubungi Kami';
    $data['content'] = $this->load->view('auth/contact_us',$data,true);
    $this->load->view('template',$data);
  }

  public function do_contact_us(){
    if($this->session->logged_in == 1){
      $contact_data = $this->M_auth->get_user_auth($this->session->userdata('id_u'));
      $name = $contact_data[0]->firstname_u." ".$contact_data[0]->lastname_u;
      $email = $contact_data[0]->email_u;
    }
    else{
      $name = $this->input->post('name');
      $email = $this->input->post('email');
    }
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
      $this->session->set_flashdata('contactus', 1);
    }
    else {
      $this->session->set_flashdata('contactus', 2);
      //show_error($this->email->print_debugger());
    }
    redirect('Auth/contact_us');
  }

  public function book_request(){
    if($this->session->logged_in == 1){
      $check = $this->M_book->checknullprofile($this->session->userdata('id_u'));

      if($this->emptyElementExists($check)){
        $this->session->set_flashdata('profile_report', 'Maaf kamu harus mengisi biodata terlebih dahulu');
        redirect('Accounts/settings');
      }
    }
    $data['nav_category'] 		= $this->M_category->get_all_category();

		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);


    $data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
    $data['header'] = $this->load->view('profile/header','',true);
    $data['page_title'] = 'Request Buku';
    $data['content'] = $this->load->view('auth/book_request',$data,true);
    $this->load->view('template',$data);
  }

  public function do_book_request(){
    if($this->session->logged_in == 1){
      $contact_data = $this->M_auth->get_user_auth($this->session->userdata('id_u'));
      $name = $contact_data[0]->firstname_u." ".$contact_data[0]->lastname_u;
      $hp = $contact_data[0]->phone_number_u;
    }
    else{
      $name = $this->input->post('name');
      $hp = $this->input->post('hp');
    }
    $title = $this->input->post('title');
    $category = $this->input->post('category');
    $author = $this->input->post('author');
    $interest = $this->input->post('interest');

    $data_request = array($title, $category, $author, $interest, $name, $hp);

    $result = $this->M_book->insert_request($data_request);

    if($result){
      $this->session->set_flashdata('request', 1);
    }
    else {
      $this->session->set_flashdata('request', 2);
    }
    redirect('auth/book_request');
  }

}
 ?>

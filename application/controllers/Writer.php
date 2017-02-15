<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writer extends CI_Controller {


public function __construct()
{
  parent::__construct();
  $this->load->library('session');
  $this->load->library('fixstring');
  $this->load->helper('url');
  $this->load->library('form_validation');
  $this->load->helper(array('form', 'url'));
  $this->load->model('M_writer');
  $this->load->model('M_auth');
}

public function w($slug = 'blank')
{

  $data['header']			 = $this->load->view('parts/header','',true);
  $data['navbar']			 = $this->load->view('parts/navbar', $data,true);
  $data['footer']			 = $this->load->view('parts/footer','',true);
  $data['writer'] = $this->M_writer->get_writer_data($slug);
  $id_writer = $data['writer'][0];
  $id_writer = $id_writer->id_writer;
  $data['books'] = $this->M_writer->get_writer_books($id_writer);

  //ADD TO LOG_VISIT
  if($this->session->logged_in == 1){
    $temp = $this->session->userdata('userdata');
    $id_user = $temp[0]->id_u;


    $add_log = $this->M_auth->add_log_view($id_user, 'writer', $id_writer);
  }
  else{
    $ip = $this->input->ip_address();

    $add_log = $this->M_auth->add_log_view($ip, 'writer', $id_writer);
  }
  if($add_log){


    $data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
    $data['header'] = $this->load->view('writer/header-writer','',true);
    $data['page_title'] = $data['writer'][0]->name_writer;

    $data['content'] = $this->load->view('writer/writer',$data,true);
    $this->load->view('template',$data);

  }
  else{
    redirect('/');
  }

  }
}

?>

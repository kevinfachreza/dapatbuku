<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));
		$this->load->model('M_book');
	}

	public function index()
	{
		$id_in = $this->input->get('id');
		//var_dump($id_in);
		//exit();
		$data['book_data'] = $this->M_book->get_data_book($id_in);
		$data['writer_data'] = $this->M_book->get_writer_short($id_in);
		$data['review_data'] = $this->M_book->get_review($id_in);

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('book/book',$data);
	}

	public function product()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('book/book-product',$data);
	}

}

?>

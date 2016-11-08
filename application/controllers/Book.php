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
		if($this->session->logged_in == 1)
		{
			$user_profile   = $this->session->userdata('userdata');  
			$data['user'] = $user_profile[0];
			$id_user= $data['user']->id_u;
		}
		else $id_user = 0;
		
		$slug = $this->input->get('title');
		$data['book_data'] = $this->M_book->get_data_book($slug);
		//print_r($data['book_data']);
		$id_in = $data['book_data'][0]['id_b'];
		
		$data['book_category'] = $this->M_book->get_b_category($id_in);
		$data['book_rating'] = $this->M_book->get_rate_avg($id_in);
		$data['writer_data'] = $this->M_book->get_writer_short($id_in);
		$data['review_data'] = $this->M_book->get_review($id_in);
		
		#print_r($data['review_data']);
		
		$data['rating_data'] = $this->M_book->get_rating($id_in,$id_user);
		if(!$data['rating_data'] ) $data['rating_flag'] = 0;
		else $data['rating_flag'] = 1;
		
		$data['user_review_flag'] = $this->M_book->user_review_flag($id_in,$id_user);
		if(!$data['user_review_flag'] ) $data['review_flag'] = 0;
		else $data['review_flag'] = 1;
		
		if($this->session->logged_in == 0)  $data['review_flag'] = 1;
		
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
	
	public function add_rate_book()
	{
		$star = $this->input->get('star');
		$user = $this->input->get('user');
		$book = $this->input->get('book');
		$addrate = $this->M_book->add_book_rating($star,$user,$book);
		if($addrate)
		{
			$response = "Terima Kasih Anda Telah Rate";
		}
		else
			$response = "Rating Buku Gagal";
		echo json_encode($response);
	}
	
	public function add_review_book()
	{
		$slug=$this->input->get('book');
		$title = $this->input->post('title');
		$review = $this->input->post('review');
		
		#get id book
		$data['book_data'] = $this->M_book->get_data_book($slug);
		$id_book = $data['book_data'][0]['id_b'];
		
		#get id user
		$user_profile   = $this->session->userdata('userdata');  
		$data['user'] = $user_profile[0];
		$id_user= $data['user']->id_u;
		
		
		$data = array(
		'id_b' => $id_book,
		'id_u' => $id_user,
		'title' => $title,
		'review' => $review
		);
		
		$report = $this->M_book-> add_review_book($data);
		
		if($report)
		{
			$response = 1;
		}
		else
			$response = 0;
		
		redirect('/book?title='.$slug);
		
		
	}

}

?>

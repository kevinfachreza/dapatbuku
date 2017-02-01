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
		$this->load->model('M_auth');
		$this->load->model('M_book');
		$this->load->model('M_category');
	}

	public function index()
	{

	}
	public function b($slug)
	{
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);


		$id_user = 0;
		$user_profile   = $this->session->userdata('userdata');
		if($user_profile != NULL){
			$data['user'] = $user_profile[0];
			$id_user= $data['user']->id_u;
		}
		$data['book_data'] = $this->M_book->get_data_book($slug);

		$id_in = $data['book_data'][0]['id_b'];

		$data['book_category'] = $this->M_book->get_b_category($id_in);
		$data['book_rating'] = $this->M_book->get_rate_avg($id_in);
		$data['writer_data'] = $this->M_book->get_writer_short($id_in);
		$data['review_data'] = $this->M_book->get_review($id_in);

		$data['my_review'] = $this->M_book->get_user_review($id_in, $id_user);
		$data['my_rating'] = $this->M_book->get_user_rating($id_in, $id_user);
		$data['book_sale'] = $this->M_book->get_book_sale_in($id_in);

		if($this->session->logged_in == 0){
			$data['rating_data'] = $this->M_book->get_rating($id_in,$id_user);
			if(!$data['rating_data'] ) $data['rating_flag'] = 0;
			else $data['rating_flag'] = 1;

			$data['user_review_flag'] = $this->M_book->user_review_flag($id_in,$id_user);
			if(!$data['user_review_flag'] ) $data['review_flag'] = 0;
			else $data['review_flag'] = 1;
		}
		else{
			$data['review_flag'] = 0;
			$data['rating_flag'] = 0;
		}

		//ADD TO LOG_VISIT
		if($this->session->logged_in == 1){
			$temp = $this->session->userdata('userdata');
			$id_user = $temp[0]->id_u;
			$add_log = $this->M_auth->add_log_view($id_user, 'book', $id_in);

		}
		else{
			$ip = $this->input->ip_address();

			$add_log = $this->M_auth->add_log_view($ip, 'book', $id_in);
		}

		if($add_log){
			$data['bookright']=$this->load->view('book/book-right',$data,true);
			$data['bookleft']=$this->load->view('book/book-left',$data,true);
			$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
			$data['header'] = $this->load->view('book/header','',true);
			$data['page_title'] = $data['book_data'][0]['title_b'];
			
			$data['content'] = $this->load->view('book/book',$data,true);
			$this->load->view('template',$data);
		}
		else{
			redirect('/');
		}
	}

	public function product($slug)
	{
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

		$data['n_release']=$this->M_book->get_n_release();
		$data['user_result']=$this->M_book->get_owner_book($slug);
		$data['book_result']=$this->M_book->get_product_book($slug);

		$data['book_origin'] = $this->M_book->get_book_slug_by_product($slug);
		$data['book_image']=$this->M_book->get_product_img($data['book_result'][0]['id_u_b']);



		$money = $data['book_result'][0]['price_sell_u_b'];
		$data['book_result'][0]['price_sell_u_b'] = 'Rp ' . number_format($money, 0);
		$money = $data['book_result'][0]['price_rent_u_b'];
		$data['book_result'][0]['price_rent_u_b'] = 'Rp ' . number_format($money, 0);


		//ADD TO LOG_VISIT
		$temp = $data['book_result'][0];
		$id_in = $temp['id_u_b'];

		if($this->session->logged_in == 1){
			$temp = $this->session->userdata('userdata');
			$id_user = $temp[0]->id_u;


			$add_log = $this->M_auth->add_log_view($id_user, 'product', $id_in);
		}
		else{
			$ip = $this->input->ip_address();

			$add_log = $this->M_auth->add_log_view($ip, 'product', $id_in);
		}
		if($add_log){

			
			$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
			$data['header'] = $this->load->view('book/header-product','',true);
			$data['page_title'] = $data['book_result'][0]['title_u_b'];
			
			$data['content'] = $this->load->view('book/book-product',$data,true);
			$this->load->view('template',$data);

		}
		else{
			redirect('/');
		}
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

		redirect('/book/b/'.$slug);
	}

	public function best_seller(){
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);


		$data['slug_page'] = 'best_seller';
		$data['title_page'] = 'Best Seller';

		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;

		$limit=24;
		$offset = ($page-1)*$limit;
		$data['page_now']=$page;

		$data['book_result'] = $this->M_book->view_best_seller($offset,$limit);
		$count_books = $this->M_book->count_all_book_best_seller();
		$data['page_total'] = ceil($count_books/$limit);

		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['header'] = $this->load->view('category/header','',true);
		$data['page_title'] = 'Best Seller';
			
		$data['content'] = $this->load->view('category/best_seller',$data,true);
		$this->load->view('template',$data);
	}

	public function new_release(){

		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

		$data['slug_page'] = 'new_release';
		$data['title_page'] = 'New Release';

		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;
		$limit=24;
		$offset = ($page-1)*$limit;
		$data['page_now']=$page;

		$data['book_result'] = $this->M_book->view_new_release($offset,$limit);
		$count_books = $this->M_book->count_all_book_new_release();
		$data['page_total'] = ceil($count_books/$limit);

		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['header'] = $this->load->view('category/header','',true);
		$data['page_title'] = 'New Release';
			
		$data['content'] = $this->load->view('category/best_seller',$data,true);
		$this->load->view('template',$data);
	}

	public function most_viewed(){

		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

		$data['slug_page'] = 'most_viewed';
		$data['title_page'] = 'Most Viewed';

		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;
		$limit=24;
		$offset = ($page-1)*$limit;
		$data['page_now']=$page;

		$data['book_result'] = $this->M_book->view_most_viewed($offset,$limit);
		$count_books = $this->M_book->count_all_book_most_viewed();
		$data['page_total'] = ceil($count_books/$limit);

		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['header'] = $this->load->view('category/header','',true);
		$data['page_title'] = 'Most Viewed';
			
		$data['content'] = $this->load->view('category/best_seller',$data,true);
		$this->load->view('template',$data);
	}

}

?>

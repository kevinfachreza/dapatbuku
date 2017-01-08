<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserBook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/M_UserBook');
	}
	
	
	public function index()
	{
		if($this->session->super_login==1)
		{
			redirect('super/userbook/userbookrequest');
		}
		else redirect('super/auth/login');
	}
	
	
	public function userbookrequest()
	{
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
		
		$data['book'] = $this->M_UserBook->getRequestUserBook($limit, $offset);
		$count_books = $this->M_UserBook->countAllRequestBook();
		$data['page_total'] = ceil($count_books/$limit);
		
		
		$this->load->view('super/userbook/request_book',$data);
	}
	
	
	public function detail($slug)
	{
		$data['book_result']=$this->M_UserBook->get_product_book($slug);
		$data['book_image']=$this->M_UserBook->get_product_img($data['book_result'][0]['id_u_b']);
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		$money = $data['book_result'][0]['price_sell_u_b'];
		$data['book_result'][0]['price_sell_u_b'] = 'Rp ' . number_format($money, 0);
		$money = $data['book_result'][0]['price_rent_u_b'];
		$data['book_result'][0]['price_rent_u_b'] = 'Rp ' . number_format($money, 0);

		$data['reject_code'] = $this->M_UserBook->get_reject_code();

		$this->load->view('super/userbook/detail_userbook',$data);
	}

	public function acceptbook()
	{
		$id_userbook = $this->input->get('id');
		$id_book = $this->input->post('book_source');
		
		echo $id_book;
		echo $id_userbook;

		$data = array(
		'id_userbook' => $id_userbook,
		'id_book' => $id_book,
		);
		
		$report = $this->M_UserBook -> addBookSource($data);
		if($report) echo 'sukses';
		else 'fail';
		redirect('super/userbook/userbookrequest');
	}



	public function rejectbook()
	{
		$id_userbook = $this->input->get('id');
		$reject_code = $this->input->post('reject_code');
		
		echo $reject_code;
		echo $id_userbook;

		$data = array(
		'id_userbook' => $id_userbook,
		'reject_code' => $reject_code,
		);
		
		$report = $this->M_UserBook -> rejectUserBook($data);
		if($report) redirect('super/userbook/userbookrequest');
		else 'fail';
	}
}

?>

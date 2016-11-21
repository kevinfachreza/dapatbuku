<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	 
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->helper(array('form', 'url')); 
		$this->load->model('M_category');
	}
	
	public function index($category = 'blank')
	{
		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;
		if($category=='blank')
		{
			redirect('/');
		}
		
		$limit=24;
		$offset = ($page-1)*$limit;
		$data['page_now']=$page;
		
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		
		$data['book'] = $this->M_category->get_book_list($category,  $offset, $limit);
		$count_books = $this->M_category->count_all_book_cat($category);
		$data['page_total'] = ceil($count_books/$limit);
		
		$data['category_now']=$this->M_category->get_category($category);;
		
		$this->load->view('category/category',$data);
		
	}
}

?>
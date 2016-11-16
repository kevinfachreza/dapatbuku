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
	
	
	private function get_all_book_cat($id,$per_page)
	{
		$user_book = $this->M_category->get_all_book_cat($id);
		$page_total = $user_book[0]->count/$per_page;
		return  ceil($page_total);
	}
	
	public function index($category = 'blank')
	{
		
		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;
		
		
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		
		
		if($category=='blank')
		{
			redirect('/');
		}
		
		
		else
		{
			$category = ucwords($category);
			
			#pagination
			$per_page=24;
			$data['page_now']=$page;
			$data['category_now'] = strtolower($category);
			$start = ($page-1)*$per_page;
			
			
			
			$data['book'] = $this->M_category->get_book_list($category, $start, $per_page);
			$data['page_total']=$this->get_all_book_cat($category,$per_page);
		}
		
		$this->load->view('category/category',$data);
		
	}
}

?>
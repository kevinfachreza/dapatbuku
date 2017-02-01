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
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

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

		$data['book'] = $this->M_category->get_book_list($category,  $offset, $limit);
		$count_books = $this->M_category->count_all_book_cat($category);
		$data['page_total'] = ceil($count_books/$limit);

		if($count_books > 0)	$data['ada'] = true;
		else {
				$data['ada'] = false;
		}
		$data['category_now']=$this->M_category->get_category($category);;



		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['header'] = $this->load->view('category/header','',true);
		$data['page_title'] = 'New Release';
			
		$data['content'] = $this->load->view('category/category',$data,true);
		$this->load->view('template',$data);

	}
}

?>

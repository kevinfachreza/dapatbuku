<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
    	$this->load->helper(array('form', 'url'));
		$this->load->model('M_search');
	}

	public function index()
	{
		$keyword = $this->input->get('key-in');
		$keyword = "%".$keyword."%";
		$category = $this->input->get('category-in');
		$best_sell = $this->input->get('best_seller_flag');
		$bekas 		 = $this->input->get('bekas_flag');
		$baru			 = $this->input->get('baru_flag');
		$provincies = $this->input->get('provincies_in');
		$regencies = $this->input->get('regencies_in');
		$tebal_min = $this->input->get('tebal-min-in');
		$tebal_max = $this->input->get('tebal-max-in');
		$harga_min = $this->input->get('harga-min-in');
		$harga_max = $this->input->get('harga-max-in');
		$jual 		 = $this->input->get('jual_in');
		$sewa			 = $this->input->get('sewa_in');
		$barter		 = $this->input->get('barter_in');


		if($keyword != NULL or $category != NULL or $best_sell != NULL or $bekas != NULL
			 or $baru != NULL or $provincies != NULL or $regencies != NULL or $tebal_min != NULL
			 or $harga_min != NULL or $jual != NULL or $sewa != NULL or $barter != NULL)
		{
			$key_search = array($keyword, $category, $best_sell, $bekas,
												$baru, $regencies, $tebal_min, $tebal_max,
											  $harga_min, $harga_max, $jual, $sewa, $barter);
			$this->session->search_data = $key_search;
			$data['book_result'] = $this->M_search->search_book($key_search);
			$data['product_result']=$this->M_search->search_product($key_search);
			$data['has_result'] = 1;
			$data['key_before'] = $key_search;
			$data['provincies_pass'] = $provincies;

			if(count($data['product_result'])>0)
			{
				$money = $data['product_result'][0]['price_sell_u_b'];
				$data['product_result'][0]['price_sell_u_b'] = 'Rp ' . number_format($money, 0);
			}
		}

		
		else if($keyword == NULL and $category == NULL and $best_sell == NULL and $bekas == NULL
			 or $baru == NULL and $ $provincies == NULL and $ $regencies == NULL and $tebal_min == NULL
			 or $harga_min == NULL and $jual == NULL and $sewa == NULL and $barter == NULL)
		{
			$data['provincies_pass'] = NULL;
			$data['key_before'] = NULL;
			$data['has_result'] = 0;
		}

		if($provincies != NULL)
		{
			$this->session->province_search=$provincies;
			$data['location'] = $this->M_search->get_regencies($provincies);
		}
		$data['category']=$this->M_search->get_category();
		$data['provincies']=$this->M_search->get_provincies();

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('search/search',$data);
	}

	public function book()
	{


		if($this->session->search_data != NULL)											//TO TAKE SEARCH DATA FROM PREVIOUS SEARCHING KEY
		{
			$keyword = $this->session->search_data[0];
			$category = $this->session->search_data[1];
			$best_sell = $this->session->search_data[2];
		}
		else
		{
			$keyword=$this->input->get('search-key');									//TO TAKE SEARCH DATA FROM NORMAL FORM
			$keyword = "%".$keyword."%";
			$category=$this->input->get('category-in');
			$best_sell = $this->input->get('best_seller_flag');
		}
		$this->session->search_data = null;
		$key_search = array($keyword, $category, $best_sell);

		//LOCATING PAGE NOW
		if($this->input->get('page') != null)
		{
			$page = $this->input->get('page');
		}
		else $page = 1;

		$limit = 24;
		$offset = ($page-1)*$limit;
		$data['page_now'] = $page;
		$count_books = count($this->M_search->search_book_only($key_search));
		$data['page_total'] = ceil($count_books/$limit);

		//GET THE BOOK
		if($key_search != NULL)
		{
			$data['book_result'] = $this->M_search->search_book_only($key_search, $limit, $offset);
			$data['has_result'] = 1;
			$key_search[0] = preg_replace("/[^a-zA-Z]/", "", $key_search[0]);
			$data['key_before'] = $key_search;
		}
		else {
			$data['key_before'] = null;
			$data['has_result'] = 0;
			$data['book_result'] = array();
		}

		$this->session->search_data = $key_search;
		$data['category']=$this->M_search->get_category();
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('search/search-book',$data);
	}

	public function product($tmp_in = NULL)
	{
		//REFERRED FROM HOMEPAGE
		$data['use_slug'] = 0;
		//$tmp_in = $this->input->get('title');
		if($tmp_in != NULL)
		{
			$data['product_result'] = $this->M_search->get_book_by_slug($tmp_in);
			$data['use_slug'] = 1;
			$data['provincies_pass'] = NULL;
			$data['key_before'] = NULL;
			$data['has_result'] = 1;
			$data['title'] = $tmp_in;
			//LOCATING PAGE NOW
			if($this->input->get('page') != null)
			{
				$page = $this->input->get('page');
			}
			else $page = 1;

			$limit = 24;
			$offset = ($page-1)*$limit;
			$data['page_now'] = $page;
			$count_books = count($this->M_search->get_book_by_slug($tmp_in));

			$data['page_total'] = ceil($count_books/$limit);
			$data['product_result'] = $this->M_search->get_book_by_slug($tmp_in, $limit, $offset);
			$data['has_result'] = 1;
		}

		if($tmp_in == null)
		{
			$keyword = $this->input->get('key-in');
			$category = $this->input->get('category-in');
			$best_sell = $this->input->get('best_seller_flag');
			$bekas 		 = $this->input->get('bekas_flag');
			$baru			 = $this->input->get('baru_flag');
			$provincies = $this->input->get('provincies_in');
			$regencies = $this->input->get('regencies_in');
			$tebal_min = $this->input->get('tebal-min-in');
			$tebal_max = $this->input->get('tebal-max-in');
			$harga_min = $this->input->get('harga-min-in');
			$harga_max = $this->input->get('harga-max-in');
			$jual 		 = $this->input->get('jual_in');
			$sewa			 = $this->input->get('sewa_in');
			$barter		 = $this->input->get('barter_in');

			if($keyword != NULL or $category != NULL or $best_sell != NULL or $bekas != NULL
				 or $baru != NULL or $provincies != NULL or $regencies != NULL or $tebal_min != NULL
				 or $harga_min != NULL or $jual != NULL or $sewa != NULL or $barter != NULL)
			{
				$key_search = array($keyword, $category, $best_sell, $bekas,
													$baru, $regencies, $tebal_min, $tebal_max,
												  $harga_min, $harga_max, $jual, $sewa, $barter);
				//LOCATING PAGE NOW
				if($this->input->get('page') != null)
				{
					$page = $this->input->get('page');
				}
				else $page = 1;

				$limit = 24;
				$offset = ($page-1)*$limit;
				$data['page_now'] = $page;
				$count_books = count($this->M_search->search_product($key_search));

				$data['page_total'] = ceil($count_books/$limit);
				$data['product_result'] = $this->M_search->search_product($key_search, $limit, $offset);
				$data['has_result'] = 1;
				$data['key_before'] = $key_search;
				$data['provincies_pass'] = $provincies;
				$data['title'] = null;
			}
			else if($keyword == NULL and $category == NULL and $best_sell == NULL and $bekas == NULL
				 or $baru == NULL and $ $provincies == NULL and $ $regencies == NULL and $tebal_min == NULL
				 or $harga_min == NULL and $jual == NULL and $sewa == NULL and $barter == NULL)
			{
				$data['provincies_pass'] = NULL;
				$data['key_before'] = NULL;
				$data['has_result'] = 0;
			}
			if($provincies != NULL)
			{
				$this->session->province_search=$provincies;
				$data['location'] = $this->M_search->get_regencies($provincies);
			}
		}


		$data['category']=$this->M_search->get_category();
		$data['provincies']=$this->M_search->get_provincies();

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('search/search-product',$data);

	}

}

?>

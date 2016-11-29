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
			$data['result']=$this->M_search->get_search($key_search);
			$data['has_result'] = 1;
			$data['key_before'] = $key_search;
			$data['provincies_pass'] = $provincies;
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
		$keyword=$this->input->get('search-key');
		$category=$this->input->get('category-in');

		if($keyword != NULL && $category == NULL)
		{
			$data['result']=$this->M_search->get_result_no_category($keyword);
			$data['has_result'] = 1;
		}
		else if($keyword != NULL && $category != NULL)
		{
			$data['result']=$this->M_search->get_result_category($keyword, $category);
			$data['has_result'] = 1;
		}
		else {
			$data['has_result'] = 0;
			$data['result'] = array();
		}
		$data['category']=$this->M_search->get_category();
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('search/search-book',$data);
	}

	public function product()
	{
		$use_slug = 0;
		$tmp_in = $this->input->get('title');
		if($tmp_in != NULL)
		{
			$data['result'] = $this->M_search->get_book_by_slug($tmp_in);
			$use_slug = 1;
			$data['provincies_pass'] = NULL;
			$data['key_before'] = NULL;
			$data['has_result'] = 1;
		}

		if($use_slug == 0)
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
				$data['result']=$this->M_search->get_search($key_search);
				$data['has_result'] = 1;
				$data['key_before'] = $key_search;
				$data['provincies_pass'] = $provincies;
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

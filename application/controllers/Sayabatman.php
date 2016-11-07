<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayabatman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_sayabatman');
	}

	public function index()
	{
		if($this->session->batman==1)
		{
			redirect('sayabatman/dashboard');
		}
		else redirect('sayabatman/login');
	}
	
	public function login()
	{
		$data['header']=$this->load->view('admin/header','',true);
		$this->load->view('admin/log_in',$data);
	}
	
	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if($username == 'jonsnow')
		{
			if(hash('sha256',$password) == '7b902a310e0ba8ffbdb6bd242b3a654e32fe51d8cfc80637623e323c755a1c51')
			{
				$this->session->batman = 1;
				redirect('sayabatman/index');
			}
			else
			{
				redirect('sayabatman/login');
			}
		}
		else
		{
			redirect('sayabatman/login');
		}
	}
	
	public function dashboard()
	{
		if($this->session->batman==1)
		{
			$data['header']=$this->load->view('admin/header','',true);
			$data['navbar']=$this->load->view('admin/navbar','',true);
			$data['sidebar']=$this->load->view('admin/sidebar','',true);
			$data['footer']=$this->load->view('admin/footer','',true);
			$this->load->view('admin/dashboard',$data);
		}
		else redirect('sayabatman/login');
	}
	
	private function getCategories()
	{
		$data = $this->M_sayabatman->getCategories();
		return $data;
	}
	
	public function add_book()
	{
		$data['header']=$this->load->view('admin/header','',true);
		$data['navbar']=$this->load->view('admin/navbar','',true);
		$data['sidebar']=$this->load->view('admin/sidebar','',true);
		$data['footer']=$this->load->view('admin/footer','',true);
		
		$data['categories'] = $this->getCategories();
		#print_r($data['categories']);
		
		$this->load->view('admin/add_book',$data);
	}
	
	public function do_add_book()
	{
		$judulbuku = $this->db->escape_str($this->input->post('judulbuku'));
		$pengarang = $this->db->escape_str($this->input->post('pengarang'));
		$publisher = $this->db->escape_str($this->input->post('publisher'));
		$isbn = $this->input->post('isbn');
		$halaman = $this->input->post('halaman');
		$cetakan_pertama = $this->input->post('cetakan_pertama');
		$bahasa = $this->input->post('bahasa');
		$category = $this->input->post('category');
		$cover = $this->input->post('cover');
		$file = $this->do_upload_cover_book();
		$sinopsis = $this->db->escape_str($this->input->post('sinopsis'));
		
		/*SLUG TITLE*/
		$judulbuku = ucwords($judulbuku);
		
		$string = strtolower($judulbuku);
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		
		echo $file.'<br>';
		echo $slug.'<br>';
		echo $judulbuku.'<br>';
		echo $pengarang.'<br>';
		echo $publisher.'<br>';
		echo $isbn.'<br>';
		echo $halaman.'<br>';
		echo $cetakan_pertama.'<br>';
		echo $bahasa.'<br>';
		echo $cover.'<br>';
		echo $sinopsis.'<br>';
	
		$data = array(
		'file' => $file,
		'slug' => $slug,
		'judulbuku' => $judulbuku,
		'pengarang' => $pengarang,
		'publisher' => $publisher,
		'isbn' => $isbn,
		'halaman' => $halaman,
		'cetakan_pertama' => $cetakan_pertama,
		'bahasa' => $bahasa,
		'cover' => $cover,
		'sinopsis' => $sinopsis
		);
		
		$report = $this->M_sayabatman-> addBook($data);
		
		/*GET Book ID from last upload*/
		$id = $this->M_sayabatman->getLastBook();
		$id = $id[0]->id;
		
		/*UPLOAD KATEGORI*/
		for($i=0;$i<10;$i++)
		{
			if(!empty($category[$i]))
			{
				$data_cat = array(
				'id' => $id,
				'category' => $category[$i]
				);
				$report = $this->M_sayabatman -> addBookCategory($data_cat);
			}
		}
		
		//redirect('sayabatman');
	}
	
	public function do_upload_cover_book()
	{
		$flag=1;
		$id = $this->M_sayabatman->getLastBook();
		$id = $id[0]->id;
		$id = $id+1;
		$config['upload_path']   = './assets/img/book/'.$id.'/';
		if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
		$path = $config['upload_path'];
		$path = $path;
		$new_name = $id;
		$config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 2000; 
        $config['max_width']     = 5000; 
        $config['max_height']    = 5000;  
		$config['file_name'] = 'cover_'.$new_name;
		$config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
			
        if ( ! $this->upload->do_upload('picture')) {
            $error = array('error' => $this->upload->display_errors()); 
            echo $error['error'];
			$textreport = $error['error'];
			$flag = 0;
        }
			
        else { 
            $data = array('upload_data' => $this->upload->data());
			$img_data=$this->upload->data();
			$new_name.= $img_data['file_ext'];
        } 
		
		if($flag==0)
		{
			$new_name='default.png';
		}
		
		$file = $path.'cover_'.$new_name;
		return $file;
	}
	
}

?>

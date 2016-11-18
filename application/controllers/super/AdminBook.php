<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/M_AdminBook');
	}
	
	
	public function index()
	{
		if($this->session->super_login==1)
		{
			redirect('super/adminbook/bookmanager');
		}
		else redirect('super/auth/login');
	}
	
	
	public function bookmanager()
	{
		if($this->input->get('page')!=null)
		{
			$page = $this->input->get('page');
		}
		else $page=1;
		
		$limit=24;
		$offset = ($page-1)*$limit;
		$data['page_now']=$page;
		
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		
		$data['book'] = $this->M_AdminBook->getAllBook($limit, $offset);
		$count_books = $this->M_AdminBook->countAllBook();
		$data['page_total'] = ceil($count_books/$limit);
		
		
		$this->load->view('super/book/manager_book',$data);
	}
	
	
	private function getCategories()
	{
		$data = $this->M_AdminBook->getCategories();
		return $data;
	}
	
	public function add_book()
	{
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		
		$data['categories'] = $this->getCategories();
		#print_r($data['categories']);
		
		$this->load->view('super/book/add_book',$data);
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
		
		$report = $this->M_AdminBook-> addBook($data);
		
		/*GET Book ID from last upload*/
		$id = $this->M_AdminBook->getLastBook();
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
				$report = $this->M_AdminBook -> addBookCategory($data_cat);
			}
		}
		
		redirect('super/adminbook/');
	}
	
	public function do_delete_book($id)
	{
		$id = $this->M_AdminBook->deleteThisBook($id);
		echo $id;
		if($id)
		{
			$this->session->set_flashdata('report', 'Buku Terhapus');
		}
		else $this->session->set_flashdata('report', 'Gagal Terhapus');
		
		redirect('super/adminbook/');
		
	}
	
	public function edit_book($id)
	{
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		
		#get data info
		$data['categories'] = $this->getCategories();
		$data['book'] = $this->M_AdminBook->getBook($id);
		
		#Set Checboxes Check
		$total_cat = count($data['categories']);
		$total_cat2 = count($data['book']);
		$j=0;
		
		for($i=0;$i<$total_cat;$i++){
			
			if($data['categories'][$i]->id_b_category == $data['book'][$j]->cat_id){
				$data['categories'][$i]->checked =  'checked';
				if($j < $total_cat2-1) $j++;
			}
			else{
				
				$data['categories'][$i]->checked =  '';
			}
		}
		
		#load view		
		$this->load->view('super/book/edit_book',$data);
	}
	
	public function do_edit_book()
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
		$sinopsis = $this->db->escape_str($this->input->post('sinopsis'));
		$id=$this->input->get('id');
		
		#jika gak upload foto->foto tetap
		if($_FILES["picture"]["error"] != 0) {
			$data['book'] = $this->M_AdminBook->getBook($id);
			$file = $data['book'][0]->photo_cover_b;
		}
		else 
		{
			$file = $this->do_upload_cover_book();
		}
		
		
		
		/*SLUG TITLE*/
		$judulbuku = ucwords($judulbuku);
		
		$string = strtolower($judulbuku);
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		
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
		
		$report = $this->M_AdminBook-> editBook($id,$data);
		
		#DELETE KATEGORI
		
		$delete_cat = $this->M_AdminBook->deleteBookCategory($id);
		
		/*UPLOAD KATEGORI*/
		for($i=0;$i<10;$i++)
		{
			if(!empty($category[$i]))
			{
				$data_cat = array(
				'id' => $id,
				'category' => $category[$i]
				);
				$report = $this->M_AdminBook -> addBookCategory($data_cat);
			}
		}
		
		redirect('super/adminbook/');
	}
	
	public function do_upload_cover_book()
	{
		$flag=1;
		$id = $this->M_AdminBook->getLastBook();
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminbook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/M_AdminBook');
		$this->load->library('image_lib');
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
		$tags = $this->db->escape_str($this->input->post('tags'));
		$isbn = $this->input->post('isbn');
		$halaman = $this->input->post('halaman');
		$cetakan_pertama = $this->input->post('cetakan_pertama');
		$bahasa = $this->input->post('bahasa');
		$category = $this->input->post('category');
		$cover = $this->input->post('cover');

		$judulbuku = ucwords($judulbuku);
		
		$string = strtolower($judulbuku);
		$string.='-'.$pengarang;
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);

		$file = $this->do_upload_cover_book($slug);
		$sinopsis = $this->db->escape_str($this->input->post('sinopsis'));
		print_r($file);
		$thumb = $file['thumb'];
		$file = $file['file'];
		
		/*SLUG TITLE*/
		

		echo $thumb.'<br>';
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
		'sinopsis' => $sinopsis,
		'tags' => $tags,
		'thumb' => $thumb
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
		
		#redirect('super/adminbook/');
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
		$data['selected_categories'] = $this->M_AdminBook->getSelectedCategories($id);

		
		#Set Checboxes Check
		$total_cat = count($data['categories']);
		$total_cat2 = count($data['selected_categories']);
		$j=0;
		
		if(!empty($data['selected_categories']))
		{
			for($i=0;$i<$total_cat;$i++){
					
				#echo $data['selected_categories'][$j]->cat_id;
				#echo $data['categories'][$i]->id_b_category;
				#echo $j.'<br>';

				if($data['categories'][$i]->id_b_category == $data['selected_categories'][$j]->cat_id){
					#print_r($data['selected_categories']);
					#echo '<br><br>';
					$data['categories'][$i]->checked =  'checked';
					if($j < $total_cat2-1) $j++;
				}
				else{
					$data['categories'][$i]->checked =  '';
				}
			}
		}
		else
		{
			for($i=0;$i<$total_cat;$i++){
					$data['categories'][$i]->checked =  '';
			}
		}
		#print_r($data['categories']);
		#load view		
		$this->load->view('super/book/edit_book',$data);
	}
	
	public function do_edit_book()
	{
		$judulbuku = $this->db->escape_str($this->input->post('judulbuku'));
		$pengarang = $this->db->escape_str($this->input->post('pengarang'));
		$publisher = $this->db->escape_str($this->input->post('publisher'));
		$tags = $this->db->escape_str($this->input->post('tags'));
		$isbn = $this->input->post('isbn');
		$halaman = $this->input->post('halaman');
		$cetakan_pertama = $this->input->post('cetakan_pertama');
		$bahasa = $this->input->post('bahasa');
		$category = $this->input->post('category');
		$cover = $this->input->post('cover');
		$sinopsis = $this->db->escape_str($this->input->post('sinopsis'));
		$id=$this->input->get('id');
		
		$slug = $this->M_AdminBook->getBook($id);
		print_r($slug);
		$slug = $slug[0]->slug_title_b;


		#jika gak upload foto->foto tetap
		if($_FILES["picture"]["error"] != 0) {
			$data['book'] = $this->M_AdminBook->getBook($id);
			$file = $data['book'][0]->photo_cover_b;
			$thumb = $data['book'][0]->thumb_cover_b;
		}
		else 
		{
			$file = $this->do_upload_cover_book($slug);
			$thumb = $file['thumb'];
			$file = $file['file'];
		}
		
		
		
		/*SLUG TITLE*/
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
		'sinopsis' => $sinopsis,
		'tags' => $tags,
		'thumb' => $thumb
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
	

	public function edit_all_slug()
	{
		for($i=1;$i<151;$i++)
		{

			$data['book'] = $this->M_AdminBook->getBook($i);

			$title = $this->db->escape_str($data['book'][0]->title_b);
			$writer = $this->db->escape_str($data['book'][0]->writer);
			$judulbuku = ucwords($title);
			
			$string = strtolower($judulbuku);
			$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
			$data['book'][0]->slug_title_b = $slug;
			$data['book'][0]->title_b = $title;
			$data['book'][0]->writer = $writer;
			$array = json_decode(json_encode($data['book'][0]),true);
			print_r($array);
			echo '<br><br>';

			$report = $this->M_AdminBook-> editBookAll($i,$array);
		}
	}
	public function do_upload_cover_book($slug)
	{
		$flag=1;
		$config['upload_path']   = './assets/img/book/'.$slug.'/';
		if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
		$path = $config['upload_path'];
		$path = $path;
		$new_name = $slug;
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

			$thumb = $path;
			$thumb.= 'cover_';
			$thumb.= $new_name;
			$thumb.='_thumb';
			$thumb.= $img_data['file_ext'];

			$new_name.= $img_data['file_ext'];
			#echo $filedatabase;
            

        } 
		
		if($flag==0)
		{
			$new_name='default.png';
		}
		
		$file = $path.'cover_'.$new_name;


		$result=array(
			'file' => $file,
			'thumb' => $thumb
			);
		$config['image_library'] = 'gd2';
		$config['source_image'] = $file;
		$config['create_thumb'] = TRUE;
	    $config['maintain_ratio'] = TRUE;
	    $config['height']   = 200;
	    $config["thumb_marker"] = "_thumb";

	    $this->image_lib->clear();
	    $this->image_lib->initialize($config);
	    $this->image_lib->resize();

		$this->load->library('image_lib', $config);

		return $result;
	}

	public function search()
	{
		$keyword = $this->db->escape_str($this->input->post('keyword'));
		
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		
		$data['book'] = $this->M_AdminBook->searchBook($keyword);
		
		$this->load->view('super/book/search_book',$data);
	}
	
}

?>

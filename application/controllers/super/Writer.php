<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/M_writer');
		$this->load->library('image_lib');

	}

	public function index()
	{
		if($this->session->super_login==1)
		{
      if($this->input->get('page') != null){
        $page = $this->input->get('page');
      }
      else{
        $page = 1;
      }

      $limit=20;
  		$offset = ($page-1)*$limit;
  		$data['page_now']=$page;

  		$data['header']=$this->load->view('super/parts/header','',true);
  		$data['navbar']=$this->load->view('super/parts/navbar','',true);
  		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
  		$data['footer']=$this->load->view('super/parts/footer','',true);

  		$data['writer'] = $this->M_writer->getWriter($limit, $offset);
  		$count_writers = $this->M_writer->countWriter();
  		$data['page_total'] = ceil($count_writers/$limit);

  		$this->load->view('super/writer/writer_manager',$data);
		}
		else redirect('super/auth/login');
	}

	public function add_writer(){
		if($this->session->super_login == 1){
			$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);

		$this->load->view('super/writer/add_writer',$data);
		}
		else{
			redirect('super/auth/login');
		}
	}

	public function do_add_writer(){
		$name = $this->input->post('nama_in');
		$asal = $this->input->post('asal_in');
		$ttl = $this->input->post('ttl_in');
		$deskripsi = $this->input->post('deskripsi_in');
		$book_count = $this->input->post('book_count');

		$name = ucwords($name);
		$string = strtolower($name);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		$slug2 = hash('sha256', $name);
		$slug2 = substr($slug2, 0, 5);
		$slug .= $slug2;

		$file = $this->do_upload_writer_photo($slug);
		$deskripsi = $this->db->escape_str($this->input->post('deskripsi_in'));

		$thumb = $file['thumb'];
		$file = $file['file'];

		$data = array(
			'file' => $file,
			'slug' => $slug,
			'name' => $name,
			'asal' => $asal,
			'ttl' => $ttl,
			'deskripsi' => $deskripsi,
			'thumb' => $thumb
		);

		$result = $this->M_writer->addWriter($data);

		//GET Book
		$id = $this->M_writer->getLastWriter();
		$id = $id[0]->id;

		if($result){
			if($book_count > 0){
						for($i = 1;$i<=$book_count;$i++){
							$book = 'field'.$i;
							$id_book = $this->input->post($book);
							$add_book = $this->M_writer->set_book_writer($id, $id_book);
							if(!$add_book){
								$this->session->set_flashdata('report', 'Penambahan buku Gagal');
								break;
							}
							else if($add_book && $i == $book_count){
								$this->session->set_flashdata('report', 'Penambahan buku Berhasil');
							}
						}
			}
			else{
					$this->session->set_flashdata('report', 'Penambahan Penulis berhasil');
			}
		}
		else{
			$this->session->set_flashdata('report', 'Penambahan Penulis Gagal');
		}
		redirect('super/writer');
	}

	public function get_suggest_book(){
		// $suggest = $this->M_writer->get_suggest_book();
		// $suggest = $suggest['title_b'];
		$this->load->model('super/M_writer');
		if(isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->M_writer->get_suggest_book($q);
		}
	}

	public function delete_writer(){
		$slug = $this->input->get('slug');
		$slugpath = './assets/img/writer/'.$slug;

		array_map('unlink', glob("$slugpath/*.*"));
		rmdir($slugpath);

		$delete = $this->M_writer->delete_writer($slug);
		if($delete == 1){
			$this->session->set_flashdata('report', 'Penghapusan penulis berhasil');
		}
		else{
			$this->session->set_flashdata('report', 'Penghapusan penulis gagal');
		}
		redirect('super/writer');
	}

	public function edit_writer(){
		if($this->session->super_login == 1){
			$slug = $this->input->get('slug');
			$data['header']=$this->load->view('super/parts/header','',true);
			$data['navbar']=$this->load->view('super/parts/navbar','',true);
			$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
			$data['footer']=$this->load->view('super/parts/footer','',true);
			$data['writer'] = $this->M_writer->get_writer_data($slug);
			$this->load->view('super/writer/edit_writer',$data);
		}
		else{
			redirect('super/auth/login');
		}
	}

	public function do_edit_writer(){
		$name = $this->input->post('nama_in');
		$asal = $this->input->post('asal_in');
		$ttl = $this->input->post('ttl_in');
		$deskripsi = $this->input->post('deskripsi_in');
		$slug = $this->input->post('slug');

		#jika gak upload foto->foto tetap
		if($_FILES["picture"]["error"] != 0) {
			$data['writer'] = $this->M_writer->get_writer_data($slug);
			$file = $data['writer'][0]->photo_writer;
			$thumb = $data['writer'][0]->thumb_thumb_writer;
		}
		else
		{
			$file = $this->do_upload_writer_photo($slug);
			$thumb = $file['thumb'];
			$file = $file['file'];
		}

		$data = array(
			'file' => $file,
			'slug' => $slug,
			'name' => $name,
			'asal' => $asal,
			'ttl' => $ttl,
			'deskripsi' => $deskripsi,
			'thumb' => $thumb
		);

		$report = $this->M_writer->editWriter($slug,$data);
		if($report){
			$this->session->set_flashdata('report', 'Perubahan writer Berhasil');
		}
		else{
			$this->session->set_flashdata('report', 'Perubahan writer gagal');
		}

		redirect('super/writer');
	}

	private function do_upload_writer_photo($slug)
	{
		$flag=1;
		$config['upload_path']   = './assets/img/writer/'.$slug.'/';
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

}

?>

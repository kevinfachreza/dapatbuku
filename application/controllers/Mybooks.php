<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mybooks extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_book');
	}

	public function index()
	{
		if($this->session->logged_in != 1)
		{
			redirect('Welcome');
		}
		else
		{
			$data['header']		= $this->load->view('parts/header','',true);
			$data['navbar']		= $this->load->view('parts/navbar','',true);
			$data['footer']		= $this->load->view('parts/footer','',true);
			redirect('mybooks/manager');
		}
	}

	public function manager()
	{
		$user_data = $this->session->userdata('userdata');
		$data['user'] = $user_data[0];
		$data['all_book'] =	$this->M_book->get_my_book($data['user']->id_u);
		//print_r($data['all_book']);
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$data['navbar2']=$this->load->view('profile/navbar-side','',true);
		$this->load->view('book-manager/manage-books',$data);
	}

	public function edit()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('book-manager/edit-books',$data);
	}

	public function add()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('book-manager/add-books',$data);
	}

	public function do_add()
	{
			$data = array();
			$title	=	$this->input->post('judul_in');
			$price_sell = $this->input->post('harga_jual_in');
			$rent_sell	= $this->input->post('harga_sewa_in');
			$barter			= $this->input->post('barter_in');
			$kondisi		= $this->input->post('kondisi_in');
			$berat			= $this->input->post('berat_in');
			$stock			= $this->input->post('stok_in');
			$deskripsi	= $this->input->post('deskripsi_in');

			$tmp				=	$this->session->userdata['userdata'];
			$user_id		= $tmp[0];

			$result = $this->M_book->add_my_book($title, $price_sell, $rent_sell,
																					 $barter, $kondisi, $berat, $stock, $deskripsi, $user_id->id_u);
			$tmp = $this->M_book->get_inserted_book($user_id->id_u);
			$id_last = $tmp[0]['id_u_b'];

			if($result)
			{
				//BUAT FOLDER DAN SET FOLDER PATH
				mkdir("assets/img/user/".$user_id->id_u."/books/".$id_last);
				$path = "assets/img/user/".$user_id->id_u."/books/".$id_last;

				if($this->input->post('filesubmit') && !empty($_FILES['userfiles']['name'])){
            $filesCount = count($_FILES['userfiles']['name']);			//HITUNG BANYAK FILE
	          for($i = 0; $i <= $filesCount; $i++){
								//DECLARE TIAP FILE
                $_FILES['userfile']['name'] = $_FILES['userfiles']['name'][$i];
                $_FILES['userfile']['type'] = $_FILES['userfiles']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $_FILES['userfiles']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $_FILES['userfiles']['error'][$i];
                $_FILES['userfile']['size'] = $_FILES['userfiles']['size'][$i];

								//RENAME NAMA FILE
								$filename = $_FILES['userfile']['name'];
								$file_ext = substr($filename, stripos($filename, '.'));

								//SET NAMA FILE DAN UPLOAD PATH
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';
								$config['file_name'] = $i.$file_ext;

								//SET CONFIG
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
								$filedatabase = $path."/".$i.$file_ext;		//PATH TO SAVE IN THE DATABASE
                if($this->upload->do_upload('userfile')){
                  $fileData = $this->upload->data();
                  $uploadData[$i]['file_name'] = $fileData['file_name'];
                  $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                  $uploadData[$i]['modified'] = date("Y-m-d H:i:s");

									$result = $this->M_book->insert_user_book_img($id_last, $filedatabase);
									if(!$result)
									{
										echo $result;
										break;
									}
									if($i == 0)
									{
										$result = $this->M_book->set_main_img($id_last, $filedatabase);
										if(!$result)
										{
											echo "SALAH TRAKHIR";
											return FALSE;
										}
									}
	        			}
							}
					}
				}
				redirect('mybooks/manager');
		}

	public function delete()
	{
		$id_in = $this->input->get('id-book');
		$result = $this->M_book->delete_book($id_in);

		if(!$result)
		{
			echo "GAGAL";

		}
		else {
			$data['header']=$this->load->view('parts/header','',true);
			$data['navbar']=$this->load->view('parts/navbar','',true);
			$data['footer']=$this->load->view('parts/footer','',true);
			redirect('Mybooks');
		}
	}
}

?>

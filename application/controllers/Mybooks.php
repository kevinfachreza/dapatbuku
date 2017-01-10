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

		//LOCATING PAGE NOW
		if($this->input->get('page') != null)
		{
			$page = $this->input->get('page');
		}
		else $page = 1;

		$limit = 24;
		$offset = ($page-1)*$limit;
		$data['page_now'] = $page;
		$count_books = count($this->M_book->get_my_book($data['user']->id_u));

		$data['page_total'] = ceil($count_books/$limit);
		$data['all_book'] = $this->M_book->get_my_book($data['user']->id_u, $limit, $offset);


		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$data['navbar2']=$this->load->view('profile/navbar-side','',true);
		$this->load->view('book-manager/manage-books',$data);
	}

	public function edit()
	{
		$id_in = $this->input->get('title');
		$data['book_data'] = $this->M_book->get_edit_book($id_in);
		$data['current_photo'] = $this->M_book->get_current_photo($data['book_data'][0]['id_u_b']);

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('book-manager/edit-books',$data);
	}

	public function do_edit(){
		$slug = $this->input->get('title');
		$judul = $this->input->post('judul_in');
		$harga_jual = $this->input->post('harga_jual_in');
		$harga_sewa = $this->input->post('harga_sewa_in');
		$barter = $this->input->post('barter_in');
		$kondisi = $this->input->post('kondisi_in');
		$berat = $this->input->post('berat_in');
		$stok = $this->input->post('stok_in');
		$deskripsi = $this->input->post('deskripsi_in');
		$gambar_num = array();

		$tmp = $this->M_book->get_id_by_slug($slug);
		$id_book = $tmp[0]->id_u_b;
		$array_check = $this->M_book->get_current_photo($id_book);

		foreach($array_check as $key){
				$tmp = $this->input->post($key['id_u_b_img']);
				//echo $key['id_b_source'];
				if($tmp == 1)
				{
					array_push($gambar_num, $key['id_u_b_img']);
				}
		}

		$result = $this->M_book->edit_book($slug, $judul, $harga_jual, $harga_sewa,
																			 $barter, $kondisi, $berat, $stok, $deskripsi);
		 if($this->input->post('filesubmit') && !empty($_FILES['userfiles']['name'])){
			//$filesCount = count($_FILES['userfiles']['name']);			//HITUNG BANYAK FILE
			echo "ahlo";


			$tmp				=	$this->session->userdata['userdata'];
			$user_id		= $tmp[0];
			$path = "assets/img/user/".$user_id->id_u."/books/".$id_book;
			$i = 0;
			foreach($gambar_num as $key){
				//DECLARE TIAP FILE
				$_FILES['userfile']['name'] = $_FILES['userfiles']['name'][$i];
				$_FILES['userfile']['type'] = $_FILES['userfiles']['type'][$i];
				$_FILES['userfile']['tmp_name'] = $_FILES['userfiles']['tmp_name'][$i];
				$_FILES['userfile']['error'] = $_FILES['userfiles']['error'][$i];
				$_FILES['userfile']['size'] = $_FILES['userfiles']['size'][$i];


				//$gambar_num -= 1;
				$filename = $_FILES['userfile']['name'];
				$file_ext = substr($filename, stripos($filename, '.'));

				//SET NAMA FILE DAN UPLOAD PATH
				$tmp = $this->M_book->get_img_path($key);
				$full_name = $tmp[0];
				unlink($full_name->image_path);								//DELETE PREVIOUS FILE


				$result_name = strrev($full_name->image_path);
				$result_name = explode("/", $result_name, 2);
				$tmp = explode(".", $result_name[0], 2);			//GET PREVIOUS IMAGE NAME
				$result_name = $tmp[1];
				$config['upload_path'] = $path;
				$config['allowed_types'] = 'gif|jpg|png';
				$config['file_name'] = $result_name.$file_ext;
				$config['overwrite'] = TRUE;

				//SET CONFIG
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$filedatabase = $path."/".$result_name.$file_ext;		//PATH TO CHANGE IN THE DATABASE
				$fileold = $path."/".$result_name;			//NAME TO DETECT
				if($this->upload->do_upload('userfile')){
					$fileData = $this->upload->data();
					$uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['created'] = date("Y-m-d H:i:s");
					$uploadData[$i]['modified'] = date("Y-m-d H:i:s");

					$result = $this->M_book->update_user_book_img($filedatabase, $fileold);

					if($result_name == 0)
					{
						$result = $this->M_book->set_main_img($id_book, $filedatabase);
					}
				}
				$i++;
			}
		}
			redirect('mybooks');
	}
	private function emptyElementExists($arr) {
	  return array_search("", $arr) !== false;
	 }

	public function add()
	{
		$user_data = $this->session->userdata('userdata');
		$user = $user_data[0];
		$id = $user->id_u;
		$check_null = $this->M_book->checknullprofile($id);
		if(!$this->emptyElementExists($check_null))
		{
			$data['header']=$this->load->view('parts/header','',true);
			$data['navbar']=$this->load->view('parts/navbar','',true);
			$data['footer']=$this->load->view('parts/footer','',true);
			$this->load->view('book-manager/add-books',$data);
		}
		else
		{
				$this->session->set_flashdata('profile_report', 'Kamu Harus Mengisi Data Dahulu Sebelum Menjual Bukumu');
			redirect('accounts/settings');
		}
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
			$slug1 = str_replace(' ', '-', $title);
      $slug1 = preg_replace('/[^A-Za-z0-9-]+/','-',$slug1);

			$tmp				=	$this->session->userdata['userdata'];
			$user_id		= $tmp[0];
      $slug2 = '-';
			$hash = hash('sha256', 'user_id');
			$hash = substr($slug2, 0, 5);
      $slug2.=$hash;

			$slug_final = $slug1.$slug2;
			$result = $this->M_book->add_my_book($title, $price_sell, $rent_sell,
																					 $barter, $kondisi, $berat, $stock, $deskripsi, $user_id->id_u, $slug_final);

      if($result != null)
			{

				$id_last = $result[0];
        $slug_final = $result[1];
			 	//BUAT FOLDER DAN SET FOLDER PATH
				mkdir("assets/img/user/".$user_id->id_u."/books/".$slug_final);
				$path = "assets/img/user/".$user_id->id_u."/books/".$slug_final;

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
								$file_ext = substr($filename, strrpos($filename, '.', -1));

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
			// //DELETE FOLDER
			// $tmp				=	$this->session->userdata['userdata'];
			// $user_id		= $tmp[0];
      //
			// $path = "assets/img/user/".$user_id->id_u."/books/".$id_in;
      //
			// array_map('unlink', glob("$path/*.*"));
			// rmdir($path);

			$data['header']=$this->load->view('parts/header','',true);
			$data['navbar']=$this->load->view('parts/navbar','',true);
			$data['footer']=$this->load->view('parts/footer','',true);
			redirect('Mybooks');
		}
	}
}

?>

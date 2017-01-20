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
		$this->load->library('image_lib');
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

		$limit = 10;
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

	public function edit($slug = null)
	{
    if($slug == null){
		    $slug = $this->input->get('title');
    }
		$data['book_data'] = $this->M_book->get_edit_book($slug);
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

		$tmp =	$this->session->userdata['userdata'];
		$user = $tmp[0];
		$username = $user->username_u;

		$tmp = $this->M_book->get_id_by_slug($slug);
		$id_book = $tmp[0]->id_u_b;
  	$path = "assets/img/user/".$username."/books/".$slug;

    $result = $this->M_book->edit_book($slug, $judul, $harga_jual, $harga_sewa, $barter, $kondisi, $berat, $stok, $deskripsi);
		#print_r($result);

	  if(!empty($_FILES['newfile']['name'])){     //IF THERE'S NEW PHOTO
     	array_push($_FILES['userfiles'], $_FILES['newfile']);
     	$newphoto = true;
	  }
	  else{
     	$newphoto = false;
	  }

		if($this->input->post('filesubmit') && !empty($_FILES['userfiles']['name'])){
    	$photo = $this->M_book->get_current_photo($id_book);
  		$book_source = $photo[0]['id_b_source'];
    	for($i=0;$i<count($_FILES['userfiles']['name']);$i++)
		  {

        if($newphoto && $i == (count($_FILES['userfiles']['name'])-1) ){

          $new_id_img = $this->M_book->get_all_img($id_book);
          //RENAME NAMA FILE
          $filename = $_FILES['newfile']['name'];
          $file_ext = substr($filename, strrpos($filename, '.', -1));
          //SET NAMA FILE DAN UPLOAD PATH
          $config['upload_path'] = $path;
          $config['allowed_types'] = 'gif|jpg|png';
          $config['file_name'] = $new_id_img.$file_ext;
          $config['overwrite'] = TRUE;

          //SET CONFIG
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          $filedatabase = $path."/".$new_id_img.$file_ext;
          $filethumb = $path."/".$new_id_img.'_thumb'.$file_ext;
          $fileresize = $path."/".$new_id_img.'_resize'.$file_ext;

          if($this->upload->do_upload('newfile'))
          {
            echo 'sini';
            $fileData = $this->upload->data();
            $uploadData[$new_id_img]['file_name'] = $fileData['file_name'];
            $uploadData[$new_id_img]['created'] = date("Y-m-d H:i:s");
            $uploadData[$new_id_img]['modified'] = date("Y-m-d H:i:s");

            #echo $filedatabase;
            $config['image_library'] = 'gd2';
            $config['source_image'] = $filedatabase;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['height']   = 100;
            $config["thumb_marker"] = "_thumb";

            $this->image_lib->clear();
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $this->load->library('image_lib', $config);


            $config['image_library'] = 'gd2';
            $config['source_image'] = $filedatabase;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['height']   = 500;
            $config["thumb_marker"] = "_resize";

            $this->image_lib->clear();
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $this->load->library('image_lib', $config);
            echo 'sini';
            $result = $this->M_book->insert_user_book_img($id_book, $fileresize, $filethumb, $filedatabase);
          }
        }
        else if(!empty($_FILES['userfiles']['name']))
				{
           echo "masuk";
					// echo 'in';
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
					$config['overwrite'] = TRUE;

					#print_r($config);
          if($filename != null){
            $mask = $path."/".$i."*.*";
            array_map('unlink', glob($mask));
          }
  				//SET CONFIG
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
  				$filedatabase = $path."/".$i.$file_ext;
  				$filethumb = $path."/".$i.'_thumb'.$file_ext;
  				$fileresize = $path."/".$i.'_resize'.$file_ext;
	  				//echo $filedatabase;		//PATH TO SAVE IN THE DATABASE



        	if($this->upload->do_upload('userfile'))
          {
  					// echo 'sini';
  					// echo $i;
            $fileData = $this->upload->data();
            $uploadData[$i]['file_name'] = $fileData['file_name'];
            $uploadData[$i]['created'] = date("Y-m-d H:i:s");
            $uploadData[$i]['modified'] = date("Y-m-d H:i:s");

            #echo $filedatabase;
            $config['image_library'] = 'gd2';
						$config['source_image'] = $filedatabase;
						$config['create_thumb'] = TRUE;
				    $config['maintain_ratio'] = TRUE;
				    $config['height']   = 100;
				    $config["thumb_marker"] = "_thumb";

				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

						$this->load->library('image_lib', $config);


            $config['image_library'] = 'gd2';
						$config['source_image'] = $filedatabase;
						$config['create_thumb'] = TRUE;
				    $config['maintain_ratio'] = TRUE;
				    $config['height']   = 500;
				    $config["thumb_marker"] = "_resize";

				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

						$this->load->library('image_lib', $config);

  					if($filename != null){
              $result = $this->M_book->update_ub_img($i, $id_book, $fileresize, $filethumb, $filedatabase);

              if(!$result){
                echo "ganti gagal";
              }
            }
	        }
        		else
        		{
        			echo 'fail upload';
        		}
				}
      }
      $change_main = $this->M_book->set_main_product_img($id_book);
		}
		else
		{
			echo 'no pict';
		}
    redirect('mybooks');
	}

	private function emptyElementExists($arr) {
	  return array_search("", $arr) !== false;
	 }

	public function add()
	{
    if($this->session->flashdata('warning') != null){
      $this->session->set_flashdata('kosong', 'Maaf, Anda harus menjual, menyewakan, atau barter');
    }
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

    if($price_sell == null && $rent_sell == null && $barter == null){
      $this->session->set_flashdata('warning', 'Maaf, Anda harus menjual, menyewakan, atau barter');
      redirect('mybooks/add');
    }

    else{
  			$tmp =	$this->session->userdata['userdata'];
  			$user = $tmp[0];
  			$username = $user->username_u;
  			$id = $user->id_u;
     		$slug2 = '-';
  			$slug2.=$username;

  			$slug_final = $slug1.$slug2;
  			$lastId = $this->M_book->getLastID();

  			$slug3 = hash('sha256', $lastId);
       	$slug3 = substr($slug3, 0, 10);
      	$slug_final .= '-'.$slug3;
  			echo $slug_final;

  			$result = $this->M_book->add_my_book($title, $price_sell, $rent_sell,
  			$barter, $kondisi, $berat, $stock, $deskripsi, $id, $slug_final);
  			print_r($result);

        if($result != null)
  			{
  				$id_last = $result[0];
  			 	//BUAT FOLDER DAN SET FOLDER PATH
  				mkdir("assets/img/user/".$username."/books/".$slug_final);
  				$path = "assets/img/user/".$username."/books/".$slug_final;

  				if($this->input->post('filesubmit') && !empty($_FILES['userfiles']['name'])){
              $filesCount = count($_FILES['userfiles']['name']);			//HITUNG BANYAK FILE
  	          for($i = 0; $i < $filesCount; $i++)
  	          {
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
        				$filedatabase = $path."/".$i.$file_ext;
        				$filethumb = $path."/".$i.'_thumb'.$file_ext;
        				$fileresize = $path."/".$i.'_resize'.$file_ext;			//PATH TO SAVE IN THE DATABASE

              	if($this->upload->do_upload('userfile'))
	              {
                  $fileData = $this->upload->data();
                  $uploadData[$i]['file_name'] = $fileData['file_name'];
                  $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                  $uploadData[$i]['modified'] = date("Y-m-d H:i:s");

                  #echo $filedatabase;
                  $config['image_library'] = 'gd2';
      						$config['source_image'] = $filedatabase;
      						$config['create_thumb'] = TRUE;
    					    $config['maintain_ratio'] = TRUE;
    					    $config['height']   = 100;
    					    $config["thumb_marker"] = "_thumb";

    					    $this->image_lib->clear();
    					    $this->image_lib->initialize($config);
    					    $this->image_lib->resize();

						      $this->load->library('image_lib', $config);


	                $config['image_library'] = 'gd2';
      						$config['source_image'] = $filedatabase;
      						$config['create_thumb'] = TRUE;
    					    $config['maintain_ratio'] = TRUE;
    					    $config['height']   = 500;
    					    $config["thumb_marker"] = "_resize";

    					    $this->image_lib->clear();
    					    $this->image_lib->initialize($config);
    					    $this->image_lib->resize();

      						$this->load->library('image_lib', $config);
      						$result = $this->M_book->insert_user_book_img($id_last, $fileresize, $filethumb, $filedatabase);
      						if(!$result)
      						{
      							$this->session->set_flashdata('warning', 'Maaf Penambahan buku gagal');
                    redirect('mybooks/add');
                    break;
      						}

  	        		}
  				    }
              $set_main = $this->M_book->set_main_product_img($id_last);
  					}
  				}
  			redirect('mybooks/manager');
      }
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

  public function delete_ub_img($slug, $id_img){

    $tmp = $this->M_book->get_id_by_slug($slug);
		$id_book = $tmp[0]->id_u_b;

    $check_img = $this->M_book->get_all_img($id_book);

    if($check_img == 1){
      $this->session->set_flashdata('warning', 'Maaf, Anda harus memiliki minimal satu foto');
    }
    else{
      $result = $this->M_book->delete_user_book_img($id_img);

      if(!$result){
        $this->session->set_flashdata('warning', 'Maaf, Penghapusan foto gagal');
      }
      else{
        $change_main = $this->M_book->set_main_product_img($id_book);
      }
    }
    redirect('Mybooks/edit/'.$slug);
  }

}
?>

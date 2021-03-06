

	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_accounts');
    		$this->load->library('bcrypt');
		$this->load->model('M_category');
	}

	public function index()
	{
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);
		redirect('accounts/settings');
	}

	public function settings($name='index')
	{
		if($this->session->logged_in != 1)
		{
			redirect('/');
		}
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

		$data['navbar2']=$this->load->view('profile/navbar-side','',true);

		/*get user data*/
		$user_profile   = $this->session->userdata('userdata');
		$user = $user_profile[0];
		$id = $user->id_u;


		#get user
		$data['user'] = $this->M_accounts->get_user($id);

		#get province
		$data['provinsi'] = $this->M_accounts->get_prov();

		if($name == 'change-password')
		{
			$data['content'] = $this->load->view('profile/profile-password',$data,true);
		}
		else if($name == 'book')
		{
			redirect('profile/book');
		}
		else if($name =='index')
		{

			$data['content'] = $this->load->view('profile/profile-edit',$data,true);
			
		}

		$data['sidebar'] = $this->load->view('parts/sidebar', $data,true);
		$data['header'] = $this->load->view('profile/header','',true);
		$data['page_title'] = 'Edit Profile';
			
		$this->load->view('template',$data);


	}

	public function get_cities($prov=0){

		//$prov = $this->input->post('prov_id');
		$city = $this->M_accounts->get_cities($prov);
		echo json_encode($city);
    }

	public function do_update_profile (){

		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$date = $this->input->post('date');
		$phone = $this->input->post('phone');
		$province = $this->input->post('province');
		$city = $this->input->post('city');

		$line = $this->input->post('line_in');
		$whatsapp = $this->input->post('whatsapp_in');

		if($line==NULL)	 $line = '-';
		if($whatsapp==NULL)	 $whatsapp = '-';

		$firstname = $this->db->escape_str($this->input->post('firstname'));
		$lastname = $this->db->escape_str($this->input->post('lastname'));
		$bio = $this->db->escape_str($this->input->post('bio'));

		$user_profile   = $this->session->userdata('userdata');
		$data['user'] = $user_profile[0];
		$id = $data['user']->id_u;
		// var_dump($line);
		// //echo $whatsapp;
		// exit();
		/*echo $email.'<br>';
		echo $username.'<br>';
		echo $lastname.'<br>';
		echo $date.'<br>';
		echo $phone.'<br>';
		echo $province.'<br>';
		echo $city.'<br>';
		echo $bio.'<br>';
		echo $id.'<br>';
		*/


		$data = array(
		'id' => $id,
		'email' => $email,
		'firstname' => $firstname,
		'lastname' => $lastname,
		'date' => $date,
		'phone' => $phone,
		'province' => $province,
		'city' => $city,
		'bio' => $bio,
		'line' => $line,
		'whatsapp' => $whatsapp
		);

		$report = $this->M_accounts-> edit_profile($data);


		if($report == 1)
		{
			$this->session->set_flashdata('profile_report', 'Pergantian Profile Sukses');
		}
		else if($report == 0)
		{
			$this->session->set_flashdata('profile_report', 'Pergantian Profile Gagal');
		}


		redirect('accounts/settings');

	}

	public function change_photo (){
		if(!empty($_FILES['picture-file']['name'])){
			$user_profile   = $this->session->userdata('userdata');
			$data['user'] = $user_profile[0];
			$id = $data['user']->id_u;
			$user = $data['user']->username_u;
			$flag=1;

			$config['upload_path']   = './assets/img/user/'.$user.'/profile-pict/';
			$path = $config['upload_path'];
			$path = $path;
			$new_name = $id;
			$new_name.= date("Y-m-d-H-i-s");
			$config['allowed_types'] = 'gif|jpg|png';
	        	$config['max_size']      = 2000;
	        	$config['max_width']     = 5000;
	        	$config['max_height']    = 5000;
			$config['file_name'] = $new_name;
			$config['overwrite'] = TRUE;
	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('picture-file')) {
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
				$path = 'assets/img/default/';
				$new_name='profile-pict.png';
				$error =0;
			}

			$file = $path.$new_name;

			$data = array(
			'id' => $id,
			'img' => $file
			);

			$report = $this->M_accounts-> edit_profile_picture($data);


			if($report == 0 || $flag==0)
			{
				$this->session->set_flashdata('profile_report', 'Pergantian Avatar Gagal');
			}
			else if($report == 1)
			{
				$this->session->set_flashdata('profile_report', 'Pergantian Avatar Sukses');
			}
		}
		else{
			$this->session->set_flashdata('profile_report', 'Masukkan Foto Terlebih Dahulu');
		}
		redirect('accounts/settings');

	}

	public function change_password (){

		$report = 99;

		$user_profile   = $this->session->userdata('userdata');
		$data['user'] = $user_profile[0];
		$id = $data['user']->id_u;


		$oldpassword = $this->input->post('oldpassword');
		$newpassword = $this->input->post('newpassword');
		$renewpassword = $this->input->post('re-newpassword');

		if($newpassword == $oldpassword)
		{
			$report = 2;
		}
		else if($newpassword != $renewpassword)
		{
			$report = 3;
		}

		$data = array(
		'id' => $id,
		'oldpassword' => $oldpassword,
		'newpassword' => $newpassword,
		'renewpassword' => $renewpassword
		);

		echo $oldpassword.'<br>';
		echo $newpassword.'<br>';
		echo $renewpassword.'<br>';



		if($report==99)
		{
			#cek kebenaran password
			$report = $this->M_accounts-> checkpassword($data,$oldpassword);

		}
		if($report==1)
		{
			$pass = $this->bcrypt->hash_password($newpassword);
			$report = $this->M_accounts-> change_password($id,$pass);
		}

		#echo $report;
		if($report == 2)
		{
			$this->session->set_flashdata('password_report', 'Password Lama & Baru Sama');
		}
		else if($report == 0)
		{
			$this->session->set_flashdata('password_report', 'Password Salah');
		}
		else if($report == 3)
		{
			$this->session->set_flashdata('password_report', 'Password & Re-Password Tidak Sama');
		}
		else if($report == 1)
		{
			$this->session->set_flashdata('password_report', 'Pergantian Password Sukses!');
		}
		#echo $report;
		redirect('accounts/settings/change-password');

	}
}

?>

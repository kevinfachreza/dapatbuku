
	
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
	}

	public function index()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		redirect('accounts/settings');
	}
	
	public function settings($name='index')
	{
		if($this->session->logged_in != 1)
		{
			redirect('/');
		}
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
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
			$this->load->view('profile/profile-password',$data);
		}
		else if($name == 'book')
		{
			redirect('profile/book');
		}
		else if($name =='index')
		{
			$this->load->view('profile/profile-edit',$data);
		}
	}
	
	public function get_cities($prov=12){
		
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
		$firstname = $this->db->escape_str($this->input->post('firstname'));
		$lastname = $this->db->escape_str($this->input->post('lastname'));
		$bio = $this->db->escape_str($this->input->post('bio'));
		
		$user_profile   = $this->session->userdata('userdata');  
		$data['user'] = $user_profile[0];
		$id = $data['user']->id_u;
		
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
		'bio' => $bio
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
		
		$user_profile   = $this->session->userdata('userdata');  
		$data['user'] = $user_profile[0];
		$id = $data['user']->id_u;
		
		$flag=1;
		
		$config['upload_path']   = './assets/img/user/'.$id.'/profile-pict/';
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
		
		$file = $path.$new_name;
		
		$data = array(
		'id' => $id,
		'img' => $file
		);
		
		$report = $this->M_accounts-> edit_profile_picture($data);
		
		
		if($report == 1)
		{
			$this->session->set_flashdata('profile_report', 'Pergantian Avatar Sukses');
		}
		else if($report == 0)
		{
			$this->session->set_flashdata('profile_report', 'Pergantian Avatar Gagal');
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
			$report = 1;
		}
		else if($newpassword != $renewpassword)
		{
			$report = 2;
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
		
		
		
		if($report>2)
		{
			$report = $this->M_accounts-> change_password($data);
			$report = $report[0]->report;
		}
		
		if($report == 1)
		{
			$this->session->set_flashdata('password_report', 'Password Lama & Baru Sama');
		}
		else if($report == 0)
		{
			$this->session->set_flashdata('password_report', 'Password Salah');
		}
		else if($report == 2)
		{
			$this->session->set_flashdata('password_report', 'Password & Re-Password Tidak Sama');
		}
		else if($report == 99)
		{
			$this->session->set_flashdata('password_report', 'Pergantian Password Sukses!');
		}
		
		redirect('accounts/settings/change-password');
		
	}
}

?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_banner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('super/MA_banner');
	}

	public function index()
	{
		if($this->session->super_login==1)
		{
			redirect('super/A_banner/manager');
		}
		else redirect('super/auth/login');
	}

	public function manager()
	{
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		$data['banner'] = $this->MA_banner->getBanner();
		$this->load->view('super/banner/manager',$data);
	}
	public function add()
	{
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		$data['banner'] = $this->MA_banner->getBanner();
		$this->load->view('super/banner/add',$data);
	}

	public function do_add()
	{
		$id = $this->MA_banner->getLastID();
		$link = $this->db->escape_str($this->input->post('link'));
		$file = $this->do_upload_cover_book($id);
		if($file)
		{
			$data = array(
			'file' => $file,
			'link' => $link
			);
			
			$report = $this->MA_banner-> insert($data);
			
			redirect('super/a_banner/');
		}


	}

	public function do_upload_cover_book($id)
	{
		$config['upload_path']   = './assets/img/banner/';
		$config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 2000; 
        $config['max_width']     = 5000; 
        $config['max_height']    = 5000;  
		$config['file_name'] = 'banner_'.$id+1;
		$config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
			
        if ( ! $this->upload->do_upload('picture')) {
            $error = array('error' => $this->upload->display_errors()); 
            echo $error['error'];
			$textreport = $error['error'];
			$flag = 0;
			return false;
        }
			
        else { 
            $data = array('upload_data' => $this->upload->data());
			$img_data=$this->upload->data();
			$new_name = $config['file_name'];
			$new_name.= $img_data['file_ext'];
			$file = $new_name;
			return $file;
        }
		
	}


	public function showall()
	{
		$data['header']=$this->load->view('super/parts/header','',true);
		$data['navbar']=$this->load->view('super/parts/navbar','',true);
		$data['sidebar']=$this->load->view('super/parts/sidebar','',true);
		$data['footer']=$this->load->view('super/parts/footer','',true);
		$data['banner'] = $this->MA_banner->showall();
		$this->load->view('super/banner/manager',$data);
	}

	public function activate($id)
	{
		$report = $this->MA_banner->activate($id,1);
		if($report)
		{
			redirect('super/A_banner/manager');
		}
		else echo 'error';
	}

	public function deactivate($id)
	{
		$report = $this->MA_banner->activate($id,0);
		if($report)
		{
			redirect('super/A_banner/manager');
		}
		else echo 'error';
	}

	public function delete($id)
	{
		$report = $this->MA_banner->activate($id,10);
		if($report)
		{
			redirect('super/A_banner/manager');
		}
		else echo 'error';
	}
	
}

?>

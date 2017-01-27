<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('fixstring');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_messages');
		$this->load->model('M_category');
	}

	public function index($user='')
	{
		$data['nav_category'] 		= $this->M_category->get_all_category();

		$data['header']			 = $this->load->view('parts/header','',true);
		$data['navbar']			 = $this->load->view('parts/navbar', $data,true);
		$data['footer']			 = $this->load->view('parts/footer','',true);

		/*Set Userdata Session*/
		$user_profile   = $this->session->userdata('userdata');
		$data['user_login'] = $user_profile[0];
		$id = $user_profile[0]->id_u;
		$username_login = $user_profile[0]->username_u;

		/*Get Room & user data Yang Mengandung ID si User_Login*/
		$data['messages_room_list'] = $this->M_messages->getRoomChatList($id);
		$count_messages_room = count($data['messages_room_list']);
		#print_r($data['messages_room_list']);


		/*Get Whose Messages Will be Opened*/
		if(empty($user))
		{
			$openedUser = $data['messages_room_list'][0]->username_u;
			$data['openedUser']=$data['messages_room_list'][0]->username_u;
		}
		else
		{
			$openedUser = $user;
			$data['openedUser']=$user;
		}
		#echo $openedUser;

		/*GET ID From openedUser*/
		/* ID digunakan untuk mencari ID ChatRoom */
		$OpenedUserID = $this->M_messages->getIdOpenUser($openedUser);
		$OpenedUserID = $OpenedUserID[0]->id_u;
		#echo $OpenedUserID;


		/*Get ID ChatRoom That Will be Opened */
		$OpenedRoomChatID = $this->M_messages->getRoomChatID($OpenedUserID,$id);
		#echo $OpenedRoomChatID[0]->id_cr;
		$OpenedRoomChatID = $OpenedRoomChatID[0]->id_cr;
		$data['openedRoomChatID']=$OpenedRoomChatID;


		/*Get Messages from roomchat*/
		$data['messages_list'] = $this->M_messages->getRoomChatMessages($OpenedRoomChatID);
		#print_r($data['messages_list']);

		/*Update Semua Pesan Terbaca*/
		$update_messages_read = $this->M_messages->updateMessageRead($OpenedRoomChatID,$id);

		$this->load->view('messages/index',$data);
	}

	public function send_message()
	{
		/*Set Userdata Session*/
		$user_profile   = $this->session->userdata('userdata');
		$data['user_login'] = $user_profile[0];
		$id = $user_profile[0]->id_u;


		$message = $this->input->post('message');
		$user2 = $this->input->get('user2');
		$room = $this->input->get('room');

		$report = $this->M_messages->sendMessage($id,$room,$message);

		redirect('messages/'.$user2);
	}


}

?>

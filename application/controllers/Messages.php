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
	}

	public function index($user='')
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
				
		/*Set Userdata Session*/
		$user_profile   = $this->session->userdata('userdata');  
		$data['user_login'] = $user_profile[0];
		$id = $user_profile[0]->id_u;
		$username_login = $user_profile[0]->username_u;
		
		/*Get Room Yang Mengandung ID si User_Login*/
		$data['messages_room_list'] = $this->M_messages->getRoomChatList($id);
		$count_messages_room = count($data['messages_room_list']);
		#print_r($data['messages_room_list']);
		
		
		/*Get other user data in the chat room*/
		for($i = 0; $i< $count_messages_room ;$i++ ){
			$user_id = $data['messages_room_list'][$i]->user;
			if($i==0){
				$data['messages_room_user'] = $this->M_messages->getUser($user_id);
				}
			else
			{
				$temp = $this->M_messages->getUser($user_id);
				array_push($data['messages_room_user'],$temp[0]);
			}
		}
		#print_r($data['messages_room_user']);
		
		/*Get Whose Messages Will be Opened*/
		if(empty($user))
		{
			$openedMessages = $data['messages_room_user'][0]->username_u;
			$data['openedUser']=$data['messages_room_user'][0]->username_u;
		}
		else
		{
			$openedMessages = $user;
			$data['openedUser']=$user;
		}	
		#echo $openedMessages;
		
		/*GET ID From openedUser*/
		$OpenedID = $this->M_messages->getIdOpenUser($openedMessages);
		$OpenedID = $OpenedID[0]->id_u;
		#echo $OpenedID;
		
		/*Get ID ChatRoom That Will be Opened */
		$OpenedRoomChatID = $this->M_messages->getRoomChatID($OpenedID,$id);
		#echo $OpenedRoomChatID[0]->id_cr;
		$OpenedRoomChatID = $OpenedRoomChatID[0]->id_cr;
		$data['openedRoomChatID']=$OpenedRoomChatID;
		
		
		/*Get Messages from roomchat*/
		$data['messages_list'] = $this->M_messages->getRoomChatMessages($OpenedRoomChatID);
		#print_r($data['messages_list']);
		

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

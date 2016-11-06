<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class  M_Messages extends CI_Model
{
    function __construct()
    {
		parent::__construct();
    }

    public function getRoomChatList($id)
    {
		$change = $this->db->query
		("
			SELECT * FROM (
			SELECT id_cr, last_active, user_1 AS user FROM chat_room WHERE user_2 = ".$id."
			UNION
			SELECT id_cr, last_active, user_2 AS user FROM chat_room WHERE user_1 = ".$id."
			) AS QUERY
			ORDER BY last_active DESC
		");
		$result = $change->result();
		return $result;
    }
	
	public function getUser($id)
    {
		$change = $this->db->query
		("
			SELECT * from user where id_u = ".$id.";
		");
		$result = $change->result();
		
		return $result;
    }
	
	public function getRoomChatID($id_1, $id_2)
    {
		$change = $this->db->query
		("
			call sp_createRoomChat(".$id_1.",".$id_2.");
		");
		$result = $change->result();
		$change->next_result(); // Dump the extra resultset.
		$change->free_result();
		return $result;
    }
	
	public function getRoomChatMessages($room_id)
    {
		$change = $this->db->query
		("
			 SELECT * FROM chat_messages, USER
			WHERE chat_messages.chat_room_id = ".$room_id." AND chat_messages.user_id = user.id_u;
		");
		$result = $change->result();
		return $result;
    }
	
	public function sendMessage($id,$room,$message)
    {
		$change = $this->db->query
		("
			INSERT INTO chat_messages (chat_room_id, user_id, message)
			values (".$room.",".$id.",'".$message."');
		");
		return $change;
    }
	
	public function getIdOpenUser($user)
	{
		$query = "SELECT id_u FROM user where username_u = '".$user."'";
		$change = $this->db->query
		($query);
		$result = $change->result();
		return $result;
	}
  

  }






 ?>

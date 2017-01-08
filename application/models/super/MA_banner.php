<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  	Class MA_banner extends CI_Model
  	{
	    function __construct(){
			parent::__construct();
	    }
		
		public function getBanner()
		{

			$query = "SELECT * from banner where active < 10 order by created_at desc";
	    	$update = $this->db->query($query);
	    	return $update->result();
		}

		public function showall()
		{

			$query = "SELECT * from banner order by created_at desc";
	    	$update = $this->db->query($query);
	    	return $update->result();
		}

		public function activate($id,$status)
		{
			$query = "UPDATE banner set active = ".$status." where id =".$id."";
	    	$update = $this->db->query($query);
	    	if ($this->db->affected_rows() >= 0) { return true; } else { return false; }
		}
		
		public function getLastID()
		{
			$query = "SELECT MAX(id) as id from banner";
	    	$update = $this->db->query($query);
	    	$update= $update->result();
	    	return $update[0]->id;

		}

		public function insert($data)
		{
			$query = "INSERT INTO banner (pict,link)  values ('".$data['file']."','".$data['link']."')";
	    	$update = $this->db->query($query);
	    	if ($this->db->affected_rows() >= 0) { return true; } else { return false; }
		}
  	}

?>

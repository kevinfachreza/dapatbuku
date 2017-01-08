<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  	Class M_Banner extends CI_Model
  	{
	    function __construct(){
			parent::__construct();
	    }
		
		public function getBanner()
		{

			$query = "SELECT * from banner where active = 1 order by created_at desc";
	    	$update = $this->db->query($query);
	    	return $update->result();
		}
  	}

?>

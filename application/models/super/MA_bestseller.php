<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  	Class MA_bestseller extends CI_Model
  	{
	    function __construct(){
			parent::__construct();
	    }
		
		public function empty()
		{
			$query = "UPDATE book set best_seller_rank = NULL";
	    	$update = $this->db->query($query);
	    	if ($this->db->affected_rows() >= 0) { return true; } else { return false; }
		}
	
		public function edit($id,$i)
		{
			$query = "UPDATE book set best_seller_rank = ".$i.", best_seller_flag=1
			where id_b=".$id."";
			#echo $query.'<br>';
	    	$update = $this->db->query($query);
	    	if ($this->db->affected_rows() >= 0) { return true; } else { return false; }
	    }
  	}

?>

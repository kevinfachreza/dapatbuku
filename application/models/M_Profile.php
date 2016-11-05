<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_Profile extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function get_data($id_in){
      $change = $this->db->query
		("
			SELECT * from USER where id_u = ".$id_in."
		");
		$result = $change->result();
		return $result;

    }

  }

 ?>

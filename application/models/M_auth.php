<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_auth extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function register($datain){
      $query = $this->db->insert('user', $datain);
      if($query){
        return true;
      }
      else {
        return false;
      }
    }

    public function login($user_check, $pass_check){
      
		$query = $this->db->query("SELECT * FROM user where email_u = '".$user_check."' and password_u = SHA2('".$pass_check."',256)");

      if($query -> num_rows() == 1){
        return $query->result();
      }
      else {
        return false;
      }

    }

    public function pass_check($id_in, $pass_in){
      $this -> db -> from('user');
      $this -> db -> where('id_u', $id_in);
      $this -> db -> where('password_u', $pass_in);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1){
        return true;
      }
      else {
        return false;
      }
    }


  }

 ?>

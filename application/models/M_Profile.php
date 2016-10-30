<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_Profile extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function get_data($id_in){
      $this -> db -> select('firstname_u, point, money');
      $this -> db -> from('user');
      $this -> db -> where('id_u', $id_in);

      $mydata = $this -> db -> get();

      return $mydata->result_array();
    }

  }

 ?>

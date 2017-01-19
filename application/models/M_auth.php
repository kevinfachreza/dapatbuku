<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_auth extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function register($em_in, $name_in, $date_in, $pass_in){
      $query = $this->db->query("INSERT INTO user(email_u, username_u,
          date_of_birth_u, password_u, created_at) VALUES('".$em_in."', '".$name_in."', '".$date_in."', '".$pass_in."', CURRENT_TIMESTAMP)");
      if($query){
        $result = $this->db->insert_id();
        return $result;
      }
      else {
        return false;
      }
    }

    public function check_register($em_in, $name_in){
      $query1 = $this->db->query("SELECT * FROM user WHERE email_u ='".$em_in."';");

      if($query1->result() != NULL){
        return 2;
      }
      else{
        $query2 = $this->db->query("SELECT * FROM user WHERE username_u ='".$name_in."';");
        if($query2->result() != NULL){
          return 3;
        }
        else{
          return false;
        }
      }
    }

    public function login($user_check, $pass_check){

		$query = $this->db->query("SELECT * FROM user where email_u = '".$user_check."'");

      if($query -> num_rows() == 1){

        $result = $query->result();
        $pass = $result[0]->password_u;
        $id = $result[0]->id_u;
        if ($this->bcrypt->check_password($pass_check, $pass )) {
          $query = $this->db->query("UPDATE  user SET last_login = CURRENT_TIMESTAMP where id_u = ".$id."");
          if ($this->db->affected_rows() >= 0) {
            return $result;
            } else {
                return false; // your code
            }
        }
        else {
        return false;
        }
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

    public function add_log_view($id, $jenis, $halaman){
      $query = $this->db->query("INSERT INTO log_visit(user_id_lv, jenis_lv, id_halaman_lv) VALUES('".$id."', '".$jenis."', '".$halaman."');");

      if ($this->db->affected_rows() >= 0) {
        $query = true;
        } else {
        $query = false; // your code
        }

      if($query){
        if($halaman != '0'){
          if($jenis == "book"){
            $query2 = $this->db->query("UPDATE book SET views_b = views_b + 1 WHERE id_b = '".$halaman."';");
          }
          else if($jenis == "product"){
            $query2 = $this->db->query("UPDATE user_book SET views_ub = views_ub + 1 WHERE id_u_b = '".$halaman."';");
          }
          else if($jenis == "profile"){
            $query2 = $this->db->query("UPDATE user SET views_u = views_u + 1 WHERE id_u ='".$halaman."';");
          }
        }
          return TRUE;
        }
        else{
          return FALSE;
        }
    }

    public function get_user_auth($id_in){
      $query = $this->db->query("SELECT * FROM user WHERE id_u = '".$id_in."'");

      return $query->result();
    }


  }

 ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_accounts extends CI_Model
  {
    function __construct(){
      parent::__construct();
    }

    public function get_prov(){
		$query = $this->db->query('SELECT * from region_provinces');
        return $query->result();

    }

	public function get_cities($prov){
		$query = $this->db->query("SELECT * from region_regencies where province_id = ".$prov." ");
        return $query->result();
    }

	public function get_user($id){
		$query = $this->db->query("SELECT * from user where id_u = ".$id." ");
        return $query->result();
    }

	public function edit_profile($data)
	{
		$query = $this->db->query("UPDATE user SET

		email_u = '".$data['email']."',
		firstname_u = '".$data['firstname']."',
		lastname_u = '".$data['lastname']."',
		date_of_birth_u = '".$data['date']."',
		phone_number_u = '".$data['phone']."',
		province_u = '".$data['province']."',
		city_u = '".$data['city']."',
		bio_u = '".$data['bio']."',
    line_u = '".$data['line']."',
    whatsapp_u = '".$data['whatsapp']."',
    last_update=CURRENT_TIMESTAMP

		where id_u = ".$data['id']."
		");

        if($query)
		{
			return 1;
		}
		else return 0;
	}

	public function edit_profile_picture($data)
	{
		$query = $this->db->query("UPDATE user SET

		photo_profile_u = '".$data['img']."',
		last_update=CURRENT_TIMESTAMP

		where id_u = ".$data['id']."
		");


        if($query)
		{
			return 1;
		}
		else return 0;
	}

	public function change_password($id,$pass)
	{
		$query = $this->db->query("UPDATE user SET password_u = '".$pass."', last_update=CURRENT_TIMESTAMP where id_u = ".$id."");

        if ($this->db->affected_rows() >= 0) {
            return 1;
            } else {
                return 0; // your code
            }
	}

	public function checkpassword($data, $pass_check){

		$query = $this->db->query("SELECT * FROM user where id_u = ".$data['id']."");

      if($query -> num_rows() == 1){
      	#echo 'here';
        $result = $query->result();
        $pass = $result[0]->password_u;
        $id = $result[0]->id_u;

        if ($this->bcrypt->check_password($pass_check, $pass )) {
          $query = $this->db->query("UPDATE user SET last_update = CURRENT_TIMESTAMP where id_u = ".$id."");
          if ($this->db->affected_rows() >= 0) {
            return 1;
            } else {
                return 0; // your code
            }
        }
        else {
        return 0;
        }
      }
      else {
        return 0;
      }

    }


  }

 ?>

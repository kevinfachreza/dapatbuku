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
		whatsapp_u = '".$data['whatsapp']."',
		line_u = '".$data['line']."',
		province_u = '".$data['province']."',
		city_u = '".$data['city']."',
		bio_u = '".$data['bio']."'
	
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
		
		photo_profile_u = '".$data['img']."'
	
		where id_u = ".$data['id']." 
		");
		
        
        if($query)
		{
			return 1;
		}
		else return 0;
	}
	
	public function change_password($data)
	{
		$query = $this->db->query("CALL sp_user_change_password(".$data['id'].",'".$data['oldpassword']."','".$data['newpassword']."','".$data['renewpassword']."') 
		");
		
        return $query->result();
	}

  }

 ?>

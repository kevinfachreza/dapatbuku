<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_writer extends CI_Model
  {
    function __construct(){
		parent::__construct();
    }

    public function getWriter($limit, $offset){
      $query = $this->db->query("SELECT * FROM writer ORDER BY id_writer asc LIMIT ".$limit." OFFSET ".$offset." ");

      return $query->result_array();
    }

    public function countWriter(){
      $query = $this->db->query("SELECT * FROM writer");

      return count($query->result_array());
    }

    public function addWriter($data){
      $query = $this->db->query("INSERT INTO writer(name_writer, origin_writer, date_of_birth_writer, description_writer, photo_writer, photo_thumb_writer, slug_writer) VALUES('".$data['name']."',
                                '".$data['asal']."', '".$data['ttl']."', '".$data['deskripsi']."', '".$data['file']."','".$data['thumb']."', '".$data['slug']."' )");
      if($this->db->affected_rows() == 1){
        return TRUE;
      }
      else{
        return FALSE;
      }
    }

    public function getLastWriter(){
      $query = $this->db->query("SELECT MAX(id_writer) as id FROM writer");

      return $query->result();
    }

    public function set_book_writer($id_writer, $book_id){
      $query = $this->db->query("UPDATE book SET writer_b = '".$id_writer."' WHERE id_b = '".$book_id."'");

      if($this->db->affected_rows() == 1){
        return TRUE;
      }
      else{
        return FALSE;
      }
    }

    public function get_suggest_book($q){
      $this->db->select('title_b');
      $this->db->like('title_b', $q);
      $query = $this->db->get('book');
      if($query->num_rows() > 0){
        foreach($query->result_array() as $row){
          $row_set[] = htmlentities(stripslashes($row['title_b'])); //Build array
        }
        echo json_encode($row_set); //format array to json data
      }
    }

    public function delete_writer($slug){
      $selected_id = $this->db->query("SELECT id_writer FROM writer WHERE slug_writer = '".$slug."'");
      $selected_id = $selected_id->result();

      $query = $this->db->query("DELETE FROM writer WHERE slug_writer = '".$slug."' ");

      if($this->db->affected_rows() == 1){
        $clean_book = $this->clean_book_from_writer($selected_id[0]->id_writer);
        if($clean_book){
          return 1;       //DELETE WRITER AND CLEANING THE WRITER ID FROM BOOK SUCCESS
        }
        else{
          return 2;        //CLEANING THE WRITER ID FROM BOOK FAILED
        }
      }
      else{
        return 3;     //DELETE WRITER FAILED
      }
    }

    private function clean_book_from_writer($id){
      $query = $this->db->query("UPDATE book SET writer_b = NULL WHERE writer_b = ".$id." ");

      if($this->db->affected_rows() > 0){
        return TRUE;
      }
      else{
        return FALSE;
      }
    }

    public function get_writer_data($slug){
      $query = $this->db->query("SELECT * FROM writer WHERE slug_writer ='".$slug."' ");

      return $query->result();
    }

    public function editWriter($slug, $data){
      $query = $this->db->query("
                UPDATE writer
                SET name_writer = '".$data['name']."',
                    origin_writer = '".$data['asal']."',
                    date_of_birth_writer = '".$data['ttl']."',
                    description_writer = '".$data['description_writer']."',
                    photo_writer = '".$data['file']."',
                    photo_thumb_writer = '".$data['thumb']."'
                WHERE slug_writer = '".$slug."' ");
      if($this->db->affected_rows() == 1){
        return TRUE;
      }
      else{
        return FALSE;
      }
    }

  }

 ?>

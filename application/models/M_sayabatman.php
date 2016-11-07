<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_sayabatman extends CI_Model
  {
    function __construct(){
		parent::__construct();
    }

	public function getCategories()
	{
		 $change = $this->db->query
		("
			SELECT * from book_category
		");
		$result = $change->result();
		return $result;
	}
	
	public function getLastBook()
	{
		 $change = $this->db->query
		("
			SELECT MAX(id_b) AS id FROM book
		");
		$result = $change->result();
		return $result;
	}
	
	public function addBook($data)
	{
		
		$query =
		"
			INSERT INTO book (title_b, slug_title_b, no_isbn_b, writer, publisher, pages, date_published, language_b, photo_cover_b, description_b, cover_type_b)
			VALUES ('".$data['judulbuku']."','".$data['slug']."','".$data['isbn']."','".$data['pengarang']."','".$data['publisher']."','".$data['halaman']."','".$data['cetakan_pertama']."',
			'".$data['bahasa']."','".$data['file']."','".$data['sinopsis']."','".$data['cover']."');
		";
		 $change = $this->db->query($query);
		
		return 0;
	}
	
	public function addBookCategory($data)
	{
		
		$query =
		"
			INSERT INTO book_category_connector (book_id, cat_id)
			VALUES ('".$data['id']."','".$data['category']."');
		";
		 $change = $this->db->query($query);
		
		return 0;
	}
	
  }

 ?>

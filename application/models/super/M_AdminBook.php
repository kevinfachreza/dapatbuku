<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_AdminBook extends CI_Model
  {
    function __construct(){
		parent::__construct();
    }
	
	public function getBook($id)
	{
		$change = $this->db->query
		("
			SELECT * FROM book b, book_category_connector bcc 
			WHERE b.id_b = ".$id."
			AND b.id_b = bcc.book_id
		");
		$result = $change->result();
		return $result;
	}
	
	public function getAllBook($limit, $offset)
	{
		$change = $this->db->query
		("
			SELECT * from book 
			ORDER BY id_b DESC
			LIMIT ".$limit."
			OFFSET ".$offset."
		");
		$result = $change->result();
		return $result;
	}
	
	public function countAllBook()
	{
		$change = $this->db->query
		("
			SELECT count(1) as count from book 
		");
		$result = $change->result();
		return $result[0]->count;
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
	
	public function deleteThisBook($id)
	{
		$query =
		"
			DELETE from book
			where id_b = ".$id."
		";
		$change = $this->db->query($query);
		return $this->db->affected_rows();
	}
	
	public function editBook($id,$data)
	{
		$query =
		"
			UPDATE book
			SET 
				title_b = '".$data['judulbuku']."',
				slug_title_b = '".$data['slug']."',
				no_isbn_b = '".$data['isbn']."',
				writer = '".$data['pengarang']."',
				publisher = '".$data['publisher']."',
				pages = '".$data['halaman']."',
				date_published ='".$data['cetakan_pertama']."',
				language_b = '".$data['bahasa']."',
				photo_cover_b = '".$data['file']."',
				cover_type_b = '".$data['cover']."',
				description_b = '".$data['sinopsis']."'
			WHERE id_b = ".$id.";
		";
		$change = $this->db->query($query);
		return $this->db->affected_rows();
	}
	
	public function deleteBookCategory($id)
	{
		$query =
		"
			DELETE from book_category_connector
			where book_id = ".$id."
		";
		$change = $this->db->query($query);
		return $this->db->affected_rows();
	}
	
  }

 ?>

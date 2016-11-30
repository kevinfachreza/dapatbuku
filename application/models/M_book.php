<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_book extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }


    public function get_b_category($id_in)
    {
      $query = $this->db->query("select bc.name_b_category from book_category bc, book_category_connector bcc, book b
                                 where b.id_b = '".$id_in."' and bcc.book_id = b.id_b and bc.id_b_category = bcc.cat_id;");
      return $query->result_array();
    }


    public function get_rate_avg($id_in)
    {
      $query = $this->db->query("select round(avg(new.rate), 1) as avg from (select r.rating AS rate
                                 from book_rating r, book b WHERE b.id_b = ".$id_in." and b.id_b = r.id_b) new;");
      return $query->result_array();
    }


    public function get_data_book($slug)
    {
      $query = $this->db->query("select id_b, slug_title_b, title_b, no_isbn_b, writer, pages, date_published,
                                 language_b, photo_cover_b, description_b, total_reviews_b, total_ratings,
                                 cover_type_b from book where slug_title_b = '".$slug."';");
      return $query->result_array();

    }

    public function get_b_seller()
    {
      $query = $this->db->query("
			SELECT b.writer, b.slug_title_b, b.best_seller_rank, b.id_b, b.photo_cover_b, b.title_b
			FROM book b
			WHERE b.best_seller_flag = 1 ORDER BY best_seller_rank;");
      return  $query->result_array();
    }


    public function get_n_release()
    {
      $query = $this->db->query(" select *
                                  from book b ORDER by b.date_published DESC;");
      return $query->result_array();
    }
    public function get_writer_short($id_in)
    {
      $query = $this->db->query("select w.photo_writer, w.description_writer
                                 from writer w, book b where b.id_b = '".$id_in."' and w.id_writer = b.writer;");
      return $query->result_array();
    }


    public function get_review($id_in)
    {
		$query = $this->db->query("
		SELECT u.username_u, r.title_b_review, r.rating, r.date_b_review, r.content_b_review, r.id_b_review FROM (SELECT br.id_u,
		br.title_b_review, r.rating, br.date_b_review, br.content_b_review, br.id_b_review
		FROM book_rating AS r JOIN book_review AS br WHERE r.id_u = br.id_u AND r.id_b = br.id_b AND br.id_b =".$id_in."
		GROUP BY br.id_b_review
		) AS r,
		USER u WHERE r.id_u = u.id_u ORDER BY date_b_review DESC;");
      return $query->result_array();
    }

	  public function get_rating($id_in,$id_user)
    {
      $query = $this->db->query("select id_u, rating, id_b from book_rating where id_b = ".$id_in." and id_u = ".$id_user." ");
      return $query->result_array();
    }

	  public function user_review_flag($id_in,$id_user)
    {
      $query = $this->db->query("select 1 from book_review where id_b = ".$id_in." and id_u = ".$id_user." ");
      return $query->result_array();
    }

  	public function add_book_rating($star,$user,$book)
  	{
  		$query = "
  			INSERT INTO book_rating (rating, id_u, id_b)
  			VALUES (".$star.",".$user.",".$book.");
  		";
  		$result = $this->db->query($query);
  		$result = $this->increase_book_rating($book);

  		if ($this->db->affected_rows() == '1') {
  			return TRUE;
  		}
  		else return FALSE;

  	}

  	public function increase_book_rating($book)
  	{
  		$query = "
  			UPDATE book
  			SET
  			total_ratings = total_ratings+1
  			where id_b = ".$book.";
  		";
  		$result = $this->db->query($query);
  	}

  	public function add_review_book($data)
  	{
  		$query = "
  			INSERT INTO book_review (title_b_review, content_b_review, id_u, id_b)
  			VALUES ('".$data['title']."','".$data['review']."',".$data['id_u'].",".$data['id_b'].");

  		";
  		$result = $this->db->query($query);
  		$result = $this->increase_book_review($data['id_b']);

  		if ($this->db->affected_rows() == '1') {
  			return TRUE;
  		}
  		else return FALSE;
  	}

  	public function increase_book_review($book)
  	{
  		$query = "
  			UPDATE book
  			SET
  			total_reviews_b = total_reviews_b+1
  			where id_b = ".$book.";
  		";
  		$result = $this->db->query($query);
  		return $result;
  	}

  	public function get_my_book($id_in, $limit=null, $offset=null)
    {
      $query = "select b.writer, ub.*
                                 from book b, user_book ub where ub.id_u_owner = '".$id_in."'
                                 and b.id_b = ub.id_b_source ";
      if($limit != null)
        $query .= "LIMIT ".$limit." OFFSET ".$offset." ";
      $result = $this->db->query($query);
      return $result->result_array();
    }

    public function add_my_book($title, $price_sell, $price_rent, $barter, $type, $berat, $stok, $deskripsi, $id_user, $slug)
    {
      $query = $this->db->query("insert into user_book(id_u_owner, id_b_source, title_u_b, price_sell_u_b, rent_u_b, barter_u_b, type_u_b,
                                 berat_u_b, stock_u_b, description_u_b, slug_title_u_b) VALUES('".$id_user."',13, '".$title."', '".$price_sell."',
                                 '".$price_rent."', '".$barter."', '".$type."', '".$berat."', '".$stok."', '".$deskripsi."', '".$slug."');");
      if($query)
      {
        $result = $this->db->insert_id();
          return $result;

      }
      else
      {
          return FALSE;
      }
    }

    public function get_inserted_book($id_in)
    {
      $query = $this->db->query("select id_u_b from user_book where id_u_owner = 5
                                 order by id_u_b desc limit 1;");
      return $query->result_array();
    }

    public function insert_user_book_img($id_in, $image)
    {
      $query = $this->db->query("insert into user_book_image(id_b_source, image_path) VALUES('".$id_in."', '".$image."');");

      if($this->db->affected_rows() == 1)
      {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }

    public function set_main_img($id_in, $image)
    {
      $query = $this->db->query("UPDATE user_book SET main_image_u_b = '".$image."' WHERE id_u_b = '".$id_in."';");

      if($this->db->affected_rows() == 1)
      {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }

    public function delete_book($id_in)
    {
      $query = $this->db->query("delete from user_book where id_u_b = '".$id_in."'; ");

      //echo $query;
      if($query)
      {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }

    public function get_edit_book($id_in)
    {
      $query = $this->db->query("SELECT * FROM user_book where slug_title_u_b = '".$id_in."'; ");

      return $query->result_array();
    }

    public function get_current_photo($id_in)
    {
      $query = $this->db->query("SELECT * FROM user_book_image WHERE id_b_source = '".$id_in."'; ");

      return $query->result_array();
    }

    public function edit_book($id_book, $judul, $harga_jual, $harga_sewa,
																			 $barter, $kondisi, $berat, $stok, $deskripsi)
    {
      $query = $this->db->query("update user_book set title_u_b='".$judul."', price_sell_u_b='".$harga_jual."', price_rent_u_b='".$harga_sewa."',
                                 barter_u_b='".$barter."', type_u_b='".$kondisi."', berat_u_b='".$berat."', stock_u_b='".$stok."', description_u_b='".$deskripsi."'
                                 WHERE id_u_b='".$id_book."';");
      if($query)
      {
        return TRUE;
      }
      else
      {
        return FALSE;
      }
    }

    public function update_user_book_img($file, $fileold)
    {
      $query = $this->db->query("UPDATE user_book_image SET image_path = '".$file."' WHERE image_path='".$fileold."'; ");

      if($this->db->affected_rows() == 1)
      {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }

    public function get_product_book($slug)
    {
      $query = $this->db->query("SELECT * FROM user_book ub where slug_title_u_b = '".$slug."'; ");

      return $query->result_array();
    }

    public function get_product_img($id_in)
    {
      $query = $this->db->query("SELECT * FROM user_book_image WHERE id_b_source = '".$id_in."'; ");

      return $query->result_array();
    }

    public function get_owner_book($slug)
    {
      $query = $this->db->query("SELECT u.*, rr.name FROM region_regencies rr, user u, user_book ub WHERE ub.slug_title_u_b = '".$slug."' AND u.id_u = ub.id_u_owner AND rr.id = u.city_u; ");

      return $query->result_array();
    }
  }
?>

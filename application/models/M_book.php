<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_book extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }

    public function get_data_book($id_in)
    {
      $query = $this->db->query("SELECT b.title_b, b.photo_cover_b, w.name_writer, b.total_ratings, b.total_reviews_b, b.no_isbn_b, b.pages,
                                b.date_published, b.language_b, bc.name_b_category, b.thumb_cover_b, b.description_b, bc.name_b_category, b.cover_type_b
                                FROM book b, writer w, book_rating bt, book_category bc WHERE b.id_b = '".$id_in."' AND w.id_writer = b.writer AND
                                bc.id_b_category = b.category LIMIT 1;");
      return $query->result_array();

    }

    public function get_b_seller()
    {
      $query = $this->db->query("select w.name_writer, w.id_writer, b.id_b, b.photo_cover_b, b.title_b from writer w, book b
                        where w.id_writer = b.writer and b.best_seller_b = 1;");
      return  $query->result_array();
    }

    public function get_writer_short($id_in)
    {
      $query = $this->db->query("select w.photo_writer, w.description_writer
                                 from writer w, book b where b.id_b = '".$id_in."' and w.id_writer = b.writer;");
      return $query->result_array();
    }

    public function get_review($id_in)
    {
      $query = $this->db->query("select u.username_u, r.title_b_review, r.rating, r.date_b_review, r.content_b_review, r.id_b_review from (select br.id_u,
                                 br.title_b_review, r.rating, br.date_b_review, br.content_b_review, br.id_b_review
                                 from book_rating as r join book_review as br WHERE r.id_u = br.id_u and r.id_b = br.id_b and br.id_b = '".$id_in."') as r,
                                 user u where r.id_u = u.id_u order by date_b_review desc;");
      return $query->result_array();
    }
  }

?>

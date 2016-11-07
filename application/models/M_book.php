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
                                 from book_rating r, book b WHERE b.id_b = 2 and b.id_b = r.id_b) new;");
      return $query->result_array();
    }
    public function get_data_book($id_in)
    {
      $query = $this->db->query("select id_b, title_b, no_isbn_b, writer, pages, date_published,
                                 language_b, photo_cover_b, description_b, total_reviews_b, total_ratings,
                                 cover_type_b from book where id_b = '".$id_in."';");
      return $query->result_array();

    }

    public function get_b_seller()
    {
      $query = $this->db->query("select b.writer, b.id_b, b.photo_cover_b, b.title_b from book b
                        where b.best_seller_b = 1;");
      return  $query->result_array();
    }

    public function get_n_release()
    {
      $query = $this->db->query(" select b.id_b, b.title_b, b.photo_cover_b, b.writer, b.date_published
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
      $query = $this->db->query("select u.username_u, r.title_b_review, r.rating, r.date_b_review, r.content_b_review, r.id_b_review from (select br.id_u,
                                 br.title_b_review, r.rating, br.date_b_review, br.content_b_review, br.id_b_review
                                 from book_rating as r join book_review as br WHERE r.id_u = br.id_u and r.id_b = br.id_b and br.id_b = '".$id_in."') as r,
                                 user u where r.id_u = u.id_u order by date_b_review desc;");
      return $query->result_array();
    }
  }

?>

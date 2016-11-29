<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_search extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }

    public function get_book_by_slug($slug_in)
    {
      $query = $this->db->query("select b.id_b from book b where b.slug_title_b='".$slug_in."';");

      $result_id = $query->result_array();
      $result = $this->db->query("select ub.* from user_book ub where ub.id_b_source = '".$result_id[0]['id_b']."';");

      return $result->result_array();
    }

    public function get_category()
    {
      $query = $this->db->query("SELECT * FROM book_category");

      return $query->result_array();
    }

    public function get_provincies()
    {
      $query = $this->db->query("SELECT * FROM region_provinces");

      return $query->result_array();
    }

    public function get_regencies($id_in)
    {
      $query = $this->db->query("SELECT * FROM region_regencies WHERE province_id = '".$id_in."'; ");

      return $query->result_array();
    }

    public function get_result_no_category($keyword)
    {
      $findkey="%".$keyword."%";
      $query = $this->db->query("SELECT * FROM book WHERE title_b LIKE '".$findkey."' OR writer LIKE '".$findkey."';");

      return $query->result_array();
    }

    public function get_result_category($keyword, $category)
    {
      $findkey="%".$keyword."%";
      $query = $this->db->query("SELECT b.* FROM book b, book_category_connector bcc WHERE (b.title_b LIKE '".$findkey."'
                                 OR b.writer = '".$findkey."') AND bcc.cat_id='".$category."' AND b.id_b=bcc.book_id;");
      return $query->result_array();
    }

    public function get_search($key)
    {

      $query = "SELECT res.id_u_b, res.slug_title_u_b, res.main_image_u_b, res.title_u_b, res.price_sell_u_b, res.city_u, res.rent_u_b, res.barter_u_b FROM (SELECT * FROM (SELECT ub.id_u_b, ub.slug_title_u_b, ub.main_image_u_b, ub.title_u_b, ub.id_b_source, ub.type_u_b, ub.sell_u_b,
                ub.rent_u_b, ub.barter_u_b, ub.price_sell_u_b, ub.price_rent_u_b, u.city_u FROM user_book ub
                join user u on ub.id_u_owner = u.id_u) u_detail join (SELECT b.id_b, b.best_seller_flag, b.pages,
                b.writer, bcc.cat_id FROM book b join book_category_connector bcc on b.id_b = bcc.book_id) b_detail
                on u_detail.id_b_source = b_detail.id_b) res WHERE ";
      $got_value = 0;
      //echo $got_value;
      for($i = 0;$i<10;$i++){
        if($got_value==1 && $key[$i] != NULL && $key[$i-1] == NULL)
        {
          $query .= "AND ";
        }
        //TITLE CHECK
        if($i == 0 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $key[$i]="%".$key[$i]."%";
          $query .= "res.title_u_b LIKE '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 0 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $key[$i]="%".$key[$i]."%";
          $query .= "res.title_u_b LIKE '".$key[$i]."' ";
          $got_value = 1;
        }

        //CATEGORY CHECK
        if($i == 1 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.cat_id = '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 1 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.cat_id = '".$key[$i]."' ";
          $got_value = 1;
        }

        //BEST SELLER CHECK
        if($i == 2 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.best_seller_flag = '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 2 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.best_seller_flag = '".$key[$i]."' ";
          $got_value = 1;
        }

        //BEKAS CHECK
        if($i == 3 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.type_u_b = 2 OR ";
          $got_value = 1;
        }
        else if($i == 3 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.type_u_b = 2 ";
          $got_value = 1;
        }

        //BARU CHECK
        if($i == 4 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.type_u_b = 1 AND ";
          $got_value = 1;
        }
        else if($i == 4 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.type_u_b = 1 ";
          $got_value = 1;
        }

        //KOTA CHECK
        if($i == 5 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.city_u = '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 5 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.city_u = '".$key[$i]."' ";
          $got_value = 1;
        }

        //TEBAL CHECK
        if($i == 6 && $key[$i] != NULL && $key[$i+1] != NULL && $key[$i+2] != NULL)
        {
          $query .= "(res.pages BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') AND ";
          $i++;
          $got_value = 1;
        }
        else if($i == 6 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "(res.pages BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') ";
          $i++;
          $got_value = 1;
        }

        //HARGA CHECK
        if($i == 8 && $key[$i] != NULL && $key[$i+1] != NULL && $key[$i+2] != NULL)
        {
          $query .= "(res.price_sell_u_b BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') AND ";
          $i++;
          $got_value = 1;
        }
        else if($i == 8 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "(res.price_sell_u_b BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') ";
          $i++;
          $got_value = 1;
        }

        //JUAL CHECK
        if($i == 10 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.sell_u_b = '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 10 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.sell_u_b = '".$key[$i]."' ";
          $got_value = 1;
        }

        //SEWA CHECK
        if($i == 11 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.rent_u_b = '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 11 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.rent_u_b = '".$key[$i]."' ";
          $got_value = 1;
        }

        //BARTER CHECK
        if($i == 12 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.barter_u_b = '".$key[$i]."' AND ";
          $got_value = 1;
        }
        else if($i == 12 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.barter_u_b = '".$key[$i]."' ";
          $got_value = 1;
        }
      }
      $query .= "GROUP BY res.id_u_b";
      $result = $this->db->query($query);
      return $result->result_array();
    }

  }

 ?>

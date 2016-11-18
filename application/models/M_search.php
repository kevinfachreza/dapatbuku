<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  Class M_search extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
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
      $query = "SELECT res.id_u_b, res.main_image_u_b, res.title_u_b, res.price_sell_u_b, res.city_u, res.rent_u_b, res.barter_u_b FROM (SELECT * FROM (SELECT ub.id_u_b, ub.main_image_u_b, ub.title_u_b, ub.id_b_source, ub.type_u_b, ub.sell_u_b,
                ub.rent_u_b, ub.barter_u_b, ub.price_sell_u_b, ub.price_rent_u_b, u.city_u FROM user_book ub
                join user u on ub.id_u_owner = u.id_u) u_detail join (SELECT b.id_b, b.best_seller_flag, b.pages,
                b.writer, bcc.cat_id FROM book b join book_category_connector bcc on b.id_b = bcc.book_id) b_detail
                on u_detail.id_b_source = b_detail.id_b) res WHERE ";
      for($i = 0;$i<10;$i++){
        if($i != 0 && $key[$i] != NULL && $key[$i-1] == NULL)
        {
          $query .= "AND ";
        }
        //TITLE CHECK
        if($i == 0 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $key[$i]="%".$key[$i]."%";
          $query .= "res.title_u_b LIKE '".$key[$i]."' AND ";
        }
        else if($i == 0 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $key[$i]="%".$key[$i]."%";
          $query .= "res.title_u_b LIKE '".$key[$i]."' ";
        }

        //CATEGORY CHECK
        if($i == 1 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.cat_id = '".$key[$i]."' AND ";
        }
        else if($i == 1 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.cat_id = '".$key[$i]."' ";
        }

        //BEST SELLER CHECK
        if($i == 2 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.best_seller_flag = '".$key[$i]."' AND ";
        }
        else if($i == 2 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.best_seller_flag = '".$key[$i]."' ";
        }

        //BEKAS CHECK
        if($i == 3 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.type_u_b = 2 AND ";
        }
        else if($i == 3 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.type_u_b = 2 ";
        }

        //BARU CHECK
        if($i == 4 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.type_u_b = 1 AND ";
        }
        else if($i == 4 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.type_u_b = 1 ";
        }

        //KOTA CHECK
        if($i == 5 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.city_u = '".$key[$i]."' AND ";
        }
        else if($i == 5 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.city_u = '".$key[$i]."' ";
        }

        //TEBAL CHECK
        if($i == 6 && $key[$i] != NULL && $key[$i+1] != NULL && $key[$i+2] != NULL)
        {
          $query .= "(res.pages BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') AND ";
          $i++;
        }
        else if($i == 6 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "(res.pages BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') ";
          $i++;
        }

        //HARGA CHECK
        if($i == 8 && $key[$i] != NULL && $key[$i+1] != NULL && $key[$i+2] != NULL)
        {
          $query .= "(res.price_sell_u_b BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') AND ";
          $i++;
        }
        else if($i == 8 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "(res.price_sell_u_b BETWEEN '".$key[$i]."' AND  '".$key[$i+1]."') ";
          $i++;
        }

        //JUAL CHECK
        if($i == 10 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.sell_u_b = '".$key[$i]."' AND ";
        }
        else if($i == 10 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.sell_u_b = '".$key[$i]."' ";
        }

        //SEWA CHECK
        if($i == 11 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.rent_u_b = '".$key[$i]."' AND ";
        }
        else if($i == 11 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.rent_u_b = '".$key[$i]."' ";
        }

        //BARTER CHECK
        if($i == 12 && $key[$i] != NULL && $key[$i+1] != NULL)
        {
          $query .= "res.barter_u_b = '".$key[$i]."' AND ";
        }
        else if($i == 12 && $key[$i] != NULL && $key[$i+1] == NULL)
        {
          $query .= "res.barter_u_b = '".$key[$i]."' ";
        }
      }
      $query .= "GROUP BY res.id_u_b";
      $result = $this->db->query($query);
      return $result->result_array();
    }

  }

 ?>

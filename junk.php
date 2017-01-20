mybooks/do_edit{
  #$overwriter_db_photo = $photo[$i]['id_u_b_img'];
  #echo $overwriter_db_photo;
  /*$result = $this->M_book->insert_user_book_img($book_source, $fileresize, $filethumb, $filedatabase);
  if(!$result)
  {
    echo $result;
    break;
  }
  else
  {
    $result = $this->M_book->delete_user_book_img($overwriter_db_photo);
    if(!$result)
    {
      echo 'delete error';
    }
  }

    echo 'sini';
    echo $i;
  if($i == 0)
  {
      echo 'sini';
      echo $i;
    $result = $this->M_book->set_main_img($book_source, $filethumb);
    print_r($result);
    if(!$result)
    {
      return FALSE;
    }

  }*/
}



dropdown_submenu{
  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">Agama</a>
    <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()."category/c/1" ?>">Islam</a></li>
              <li><a href="<?php echo base_url()."category/c/2" ?>">Kristen</a></li>
              <li><a href="<?php echo base_url()."category/c/3" ?>">Katolik</a></li>
              <li><a href="<?php echo base_url()."category/c/4" ?>">Buddha</a></li>
              <li><a href="<?php echo base_url()."category/c/4" ?>">Hindu</a></li>
              <li><a href="<?php echo base_url()."category/c/4" ?>">Lain lain</a></li>
          </ul>
        </li>
  
}

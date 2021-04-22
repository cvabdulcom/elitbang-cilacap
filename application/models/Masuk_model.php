<?php
class Masuk_model extends CI_Model{

  function validate($email){
    $this->db->where('email',$email);
    $result = $this->db->get('tbl_peserta',1);
    return $result;
  }

}
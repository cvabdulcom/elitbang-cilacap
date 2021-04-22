<?php
class Login_model extends CI_Model{

  function validate($username){
    $this->db->where('username',$username);
    $result = $this->db->get('tbl_pengguna',1);
    return $result;
  }

}
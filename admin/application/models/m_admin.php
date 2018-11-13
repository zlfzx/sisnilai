<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model{
  //login
  function login($where){
    return $this->db->get_where('admin', $where);
  }
}

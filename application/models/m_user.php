<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model{

  //Login
  function login($where){
    //return $this->db->get_where('siswa', $where);
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'siswa.kelas=kelas.id_kelas');
    $this->db->where($where);
    return $this->db->get();
  }

  //Nilai Per-Siswa
  function nilai_siswa($where){
    //$this->db->select('*');
    //$this->db->from('nilai');
    //$this->db->where($where);
    return $this->db->get_where('nilai', $where);
  }

  //Update Password Siswa
  function cek_password($where){
    $this->db->select('siswa.password');
    $this->db->from('siswa');
    $this->db->where($where);
    return $this->db->get();
  }
  function update_password($table, $where, $data){
    $this->db->update($table, $data, $where);
  }

  //Cek Pertanyaan Siswa
  function cek_pertanyaan($where){
    $this->db->select('siswa.pertanyaan, siswa.jawaban');
    $this->db->from('siswa');
    $this->db->where($where);
    return $this->db->get();
  }

  //Update Pertanyaan Siswa
  function update_pertanyaan($table, $where, $data){
    $this->db->update($table, $data, $where);
  }

  //Reset Password
  function reset($where){
    return $this->db->get_where('siswa', $where);
  }
}

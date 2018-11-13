<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_login extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') == 'admin'){
      redirect('admin');
    }
    $this->load->model('m_admin');
  }

  //Index login
  public function index(){
    $this->load->view('template/login');
  }

  //aksi Login
  public function actlogin(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => $password
    );
    $cek = $this->m_admin->login($where);
    if($cek->num_rows() > 0){
      $data = $cek->row_array();
      $datauser = array(
        'id' => $data['id_admin'],
        'nama' => $data['nama'],
        'username' => $data['username'],
        'status' => 'admin'
      );
      $this->session->set_userdata($datauser);
      redirect('admin');
    }
    else {
      $this->session->set_flashdata('gagal', 'Username / Password salah !');
      redirect('admin/login');
    }
   }
}

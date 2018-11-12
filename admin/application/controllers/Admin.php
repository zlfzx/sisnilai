<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('status') != 'admin') {
      // code...
      redirect('admin/login');
    }

  }

  //Index
  public function index(){
    $data['title'] = 'Administrator';

    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/utama');
    $this->load->view('admin/template/footer');
  }

  //Siswa
  public function siswa(){
    $data['title'] = 'Siswa';

    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/siswa');
    $this->load->view('admin/template/footer');
  }


  //logout
  public function logout(){
    $this->session->sess_destroy();
    redirect('admin/login');
  }
}

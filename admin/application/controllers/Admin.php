<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('status') != 'admin') {
      // code...
      redirect('login');
    }

  }

  //Index
  public function index(){
    $data['title'] = 'Administrator';

    $this->load->view('template/header', $data);
    $this->load->view('utama');
    $this->load->view('template/footer');
  }

  //Siswa
  public function siswa(){
    $data['title'] = 'Siswa';

    $this->load->view('template/header', $data);
    $this->load->view('siswa');
    $this->load->view('template/footer');
  }


  //logout
  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_login extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
  }

  //Login
	public function index(){
		if ($this->session->userdata('status') == 'user') {
			// code...
			redirect('user');
		}
		$this->load->view('login');
	}
	public function actlogin(){
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');
		$data = array(
			'nis' => $nis,
			'password' => $password
		);
		$cek = $this->m_user->login($data);
		if ($cek->num_rows() > 0) {
			// code...
			$d = $cek->row_array();
			$data_session = array(
				'id' => $d['id_siswa'],
				'nama' => $d['nama'],
        'nis' => $d['nis'],
        'kelas' => $d['kode_kelas'],
				'status' => 'user'
			);
			$this->session->set_userdata($data_session);
			redirect('');
		}
		else {
			redirect('login');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

  //Reset Password
  public function reset(){
    $this->load->view('lupapassword');
  }
  public function resetp(){
    $nis = $this->input->post('nis');
    $where = array('nis' => $nis);
    $data['ambil'] = $this->m_user->reset($where)->row_array();
    $data['cek'] = $this->m_user->reset($where)->num_rows();

    $this->load->view('lupapassword', $data);
  }
  public function resetpasswd(){
    $nis = $this->input->post('nis');
    $pertanyaan = $this->input->post('pertanyaan');
    $jawaban = $this->input->post('jawaban');
  }
}

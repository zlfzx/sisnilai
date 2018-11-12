<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		 parent::__construct();
		 if ($this->session->userdata('status') != 'user') {
		 	// code...
			redirect('login');
		 }
		 $this->load->model('m_user');
	 }

	 // Index
	public function index(){
		$data['title'] = 'Sistem Informasi Nilai';

		$nis = array('nis' => $this->session->nis);
		//cek pertanyaan
		$data['cek_pertanyaan'] = $this->m_user->cek_pertanyaan($nis)->row_array();
		//cek password
		$data['cek_password'] = $this->m_user->cek_password($nis)->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('utama');
	}

	//Nilai
	public function nilai(){
		$data['title'] = 'Nilai';
		$where = array(
			'siswa' => $this->session->nama,
			'kelas' => $this->session->kelas
		);
		$data['nilai'] = $this->m_user->nilai_siswa($where)->result();
		$data['jumlahnilai'] = $this->m_user->nilai_siswa($where)->num_rows();

		$this->load->view('template/header', $data);
		$this->load->view('nilai');
	}

	//Profil
	public function profil(){
		$data['title'] = 'Profil';
		$nis = array('nis' => $this->session->nis);
		$data['pertanyaan'] = $this->m_user->cek_pertanyaan($nis)->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('profil');
	}
	//Ganti Password
	public function update_password(){
		$nis = $this->session->nis;
		$password = $this->input->post('passwordlama');
		$passwordBaru = $this->input->post('passwordbaru');
		$confirmPassword = $this->input->post('confirmpassword');
		$where = array('nis' => $this->session->nis);
		$data = array('password' => $passwordBaru);
		$cek = $this->m_user->cek_password($where)->row_array();

		if ($password == $cek['password']) {
			// code...
			$this->m_user->update_password('siswa', $where, $data);
			redirect('profil');
		}
	}
	//Atur Pertanyaan
	public function update_pertanyaan(){
		$nis = $this->session->nis;
		$pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		$where = array('nis' => $nis);
		$data = array(
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban,
		);
		$this->m_user->update_pertanyaan('siswa', $where, $data);
		redirect('profil');
	}


	//404
	public function blank(){
		$data['title'] = 'Page Not Found';
		$this->load->view('template/header', $data);
		$this->load->view('404');
	}
}

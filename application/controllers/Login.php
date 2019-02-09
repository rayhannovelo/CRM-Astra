<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','trim|required|xss_clean');
		$valid->set_rules('password','Password','trim|required|xss_clean');
		if($valid->run()) {
			$this->simple_login->login($username,$password);
		}
		$this->load->view('login/login');
	}
	
	public function logout() {
		$this->simple_login->logout();	
	}

	public function registrasi() {
		$this->load->view('login/registrasi');
	}

	public function registrasi_form() {
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_pengguna');

		$data = array(
			'username' =>  $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => 3,
			'status' => 0
		);

		$id_pengguna = $this->m_pengguna->tambah_pengguna($data);

		$data = array(
			'id_pengguna' => $id_pengguna,
			'no_ktp' => $this->input->post('no_ktp'),
			'foto_ktp' => $this->input->post('foto_ktp'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'agama' => $this->input->post('agama'),
			'status_rumah' => $this->input->post('status_rumah'),
			'email' => $this->input->post('email'),
			'facebook' =>  $this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'instagram' => $this->input->post('instagram'),
			'youtube' => $this->input->post('youtube'),
			'hobi' => $this->input->post('hobi'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'pengeluaran' => $this->input->post('pengeluaran'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'no_hp' => $this->input->post('no_hp'),
			'no_telepon' => $this->input->post('no_telepon'),
			'status_hp' => $this->input->post('status_hp'),
			'status_informasi' => $this->input->post('status_informasi'),
			'merk_motor' => $this->input->post('merk_motor'),
			'jenis_motor' => $this->input->post('jenis_motor'),
			'tanggal_daftar' => date('Y-m-d')
		);

		$id_pembeli = $this->m_pengguna->tambah_pembeli($data);

		$data = array(
			'id_pembeli' => $id_pembeli,
			'alamat' => $this->input->post('alamat'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi'),
			'kode_pos' => $this->input->post('kode_pos')
		);

		$this->m_pengguna->tambah_alamat($data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success alert-dismissable text-center">Selamat, Anda berhasil melakukan registrasi! <br> Akun Anda sedang dalam antrian aktivasi!</div>');
		redirect('login');
	}
}	
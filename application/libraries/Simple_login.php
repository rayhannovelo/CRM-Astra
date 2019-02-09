<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {
	/* 
		Level User :
		1. Admin
		2. Manajer
		3. Pembeli
	*/

	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}

	// Fungsi login
	public function login($username,$password,$level) {
		$query = $this->CI->db->get_where('pengguna', array('username'=>$username,'password' => md5($password)));
		if($query->num_rows() == 1) {
			$pengguna 	= $this->CI->db->query('SELECT * FROM pengguna WHERE username = "'.$username.'"')->row();
			$this->CI->session->set_userdata('id_users', $pengguna->id_pengguna);
			$this->CI->session->set_userdata('username', $pengguna->username);
			$this->CI->session->set_userdata('level', $pengguna->level);
			$this->CI->session->set_userdata('login', 'login');
			if($pengguna->status == 1) {
				if($pengguna->level == 1) {
					redirect('daftar_transaksi');
				}elseif($pengguna->level == 2) {
					redirect('laporan_transaksi');
				}elseif($pengguna->level == 3) {
					$pembeli = $this->CI->db->query('SELECT `id_pembeli`, `nama_pembeli`, `jenis_kelamin` FROM `pembeli` JOIN `pengguna` ON `pembeli`.`id_pengguna` = `pengguna`.`id_pengguna` WHERE `pengguna`.`id_pengguna` = "'.$pengguna->id_pengguna.'"')->row();
					$this->CI->session->set_userdata('id_pembeli', $pembeli->id_pembeli);
					$this->CI->session->set_userdata('nama_pembeli', $pembeli->nama_pembeli);
					$this->CI->session->set_userdata('jenis_kelamin', $pembeli->jenis_kelamin);
					redirect('transaksi');
				}
			}elseif ($pengguna->status == 2) {
				$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center">Maaf akun Anda tidak valid!</div>');
				redirect('login');
			}else {
				$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center">Akun sedang dalam antrian aktivasi!</div>');
				redirect('login');
			}
		}else{                
			$this->CI->session->set_flashdata('sukses','<div class="alert alert-danger text-center">Maaf username/password yang Anda masukkan salah!</div>');
			redirect('login');
		}
	}

	// Proteksi halaman
	public function cek_login($level) {
		if($this->CI->session->userdata('level') != $level) {
			$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center">Anda Belum Log In!</div>');
			redirect('login');
		}
	}

	public function login_super($level1,$level2) {
		if($this->CI->session->userdata('level') != $level1 && $this->CI->session->userdata('level') != $level2){
			$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center" align="center">Anda Belum Log In!</div>');
			redirect('login');
		}else{
			return $this->CI->session->userdata('level');
		}
	}

	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('id_users');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('level');
		$this->CI->session->unset_userdata('id_pembeli');
		$this->CI->session->unset_userdata('nama_pembeli');
		$this->CI->session->unset_userdata('jenis_kelamin');
		$this->CI->session->unset_userdata('login');
		$this->CI->session->set_flashdata('sukses','<div class="alert alert-success text-center">Anda Berhasil Log Out!</div>');
		redirect('login');
	}
}
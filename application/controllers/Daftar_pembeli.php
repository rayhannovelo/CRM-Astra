<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pembeli extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_pengguna');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('admin/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('admin/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Registrasi";
		$data['title1'] = "Daftar Pembeli Valid";
		$data['title2'] = "Daftar Pembeli Tidak Valid";
		$data['active'] = "daftar_pembeli";
		$data['daftar_registrasi'] = $this->m_pengguna->ambil_registrasi_baru();
		$data['daftar_pembeli'] = $this->m_pengguna->ambil_pembeli_aktif();
		$data['daftar_tidak_valid'] = $this->m_pengguna->ambil_pembeli_tidak_valid();

		$this->compose_view('admin/daftar_pembeli', $data);
	}

	public function hapus_pembeli($id_pengguna)
	{
		$this->m_pengguna->hapus_pembeli($id_pengguna);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data pembeli Berhasil Dihapus!</div>');

		redirect('daftar_pembeli');
	}

	public function verifikasi($id_pembeli)
	{
		$data['title'] = "Verifikasi Pengguna";
		$data['active'] = "daftar_pembeli";
		$data['id_pembeli'] = $id_pembeli;
		$data['pembeli'] = $this->m_pengguna->ambil_pembeli_byid($id_pembeli);

		$this->compose_view('admin/verifikasi_pembeli', $data);
	}

	public function terima_pembeli($id_pembeli)
	{
		$id_pengguna = $this->db->get_where('pembeli', array('id_pembeli' => $id_pembeli))->row()->id_pengguna;
		$this->m_pengguna->terima_pembeli($id_pengguna);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Pembeli Diterima!</div>');

		redirect('daftar_pembeli');
	}

	public function tolak_pembeli($id_pembeli)
	{
		$id_pengguna = $this->db->get_where('pembeli', array('id_pembeli' => $id_pembeli))->row()->id_pengguna;
		$this->m_pengguna->tolak_pembeli($id_pengguna);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Pembeli Ditolak!</div>');

		redirect('daftar_pembeli');
	}

	public function profil($id_pembeli)
	{
		$data['title'] = "Profil Pembeli";
		$data['active'] = "daftar_pembeli";
		$data['id_pembeli'] = $id_pembeli;
		$data['pembeli'] = $this->m_pengguna->ambil_pembeli_byid($id_pembeli);

		$this->compose_view('admin/profil', $data);
	}
}

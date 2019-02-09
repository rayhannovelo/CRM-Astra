<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_kendaraan extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_kriteria');
		$this->load->model('m_kendaraan');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('admin/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('admin/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Kendaraan";
		$data['active'] = "daftar_kendaraan";
		$data['daftar_kendaraan'] = $this->m_kendaraan->ambil_kendaraan();

		$this->compose_view('admin/daftar_kendaraan', $data);
	}

	public function tambah_kendaraan()
	{
		$data['title'] = "Form Tambah Kendaraan";
		$data['active'] = "daftar_kendaraan";
		$data['Kendaraan'] = $this->m_kendaraan->ambil_kendaraan();

		$this->compose_view('admin/tambah_kendaraan', $data);
	}

	public function tambah_kendaraan_form() {
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'kategori' => $this->input->post('kategori'),
			'tipe' => $this->input->post('tipe'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'),
			'harga_dp' => $this->input->post('harga_dp'),
			'foto_kendaraan' => $this->input->post('foto_kendaraan'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		$this->m_kendaraan->tambah_kendaraan($data);

		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Kendaraan Berhasil Ditambahkan!</div>');

		redirect('daftar_kendaraan');
	}

	public function edit_kendaraan($id_kendaraan)
	{
		$data['title'] = "Form Edit Kendaraan";
		$data['active'] = "daftar_kendaraan";
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan_byid($id_kendaraan);

		$this->compose_view('admin/edit_kendaraan', $data);
	}

	public function edit_kendaraan_form($id_kendaraan) {
		$data = array(
			'kategori' => $this->input->post('kategori'),
			'tipe' => $this->input->post('tipe'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'),
			'harga_dp' => $this->input->post('harga_dp'),
			'foto_kendaraan_lama' => $this->input->post('foto_kendaraan'),
			'thumbnail_kendaraan_lama' => $this->input->post('thumbnail_kendaraan'),
			'foto_kendaraan_baru' => $this->input->post('foto_kendaraan_baru'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		$this->m_kendaraan->edit_kendaraan($id_kendaraan, $data);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Kendaraan Berhasil Diedit!</div>');

		redirect('daftar_kendaraan');
	}

	public function hapus_kendaraan($id_kendaraan, $foto_kendaraan, $thumbnail_kendaraan)
	{
		$this->m_kendaraan->hapus_kendaraan($id_kendaraan);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Kendaraan Berhasil Dihapus!</div>');

		if (file_exists("./assets/img/kendaraan/" . $foto_kendaraan))
            unlink("./assets/img/kendaraan/" . $foto_kendaraan);   
        if (file_exists("./assets/img/kendaraan/" . $thumbnail_kendaraan)) 
                unlink("./assets/img/kendaraan/" . $thumbnail_kendaraan);

		redirect('daftar_kendaraan');
	}

	public function ubah_status($id_kendaraan, $status)
	{
		$this->m_kendaraan->edit_kendaraan($id_kendaraan, array('status' => $status));
		if($status == 1) {
			$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Kendaraan Diaktifkan!</div>');
		}else {
			$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Kendaraan Dinonaktifkan!</div>');
		}

		redirect('daftar_kendaraan');
	}

	public function tambah_stok($id_kendaraan)
	{
		$data['title'] = "Form Tambah Stok";
		$data['active'] = "daftar_kendaraan";
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan_byid($id_kendaraan);

		$this->compose_view('admin/tambah_stok', $data);
	}

	public function tambah_stok_form($id_kendaraan) {
		$stok_sekarang = $this->db->get_where('kendaraan', array('id_kendaraan' => $id_kendaraan))->row()->jumlah_stok;
		$stok_baru = $this->input->post('jumlah_stok');

		$this->db->set('jumlah_stok', $stok_sekarang + $stok_baru);
		$this->db->where('id_kendaraan', $id_kendaraan);
		$this->db->update('kendaraan');

		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Kendaraan Berhasil Ditambahkan!</div>');

		redirect('daftar_kendaraan');
	}
}

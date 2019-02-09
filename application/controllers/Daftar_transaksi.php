<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_transaksi extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_kendaraan');
		$this->load->model('m_pengguna');
		$this->load->model('m_transaksi');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('admin/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('admin/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Transaksi";
		$data['active'] = "daftar_transaksi";
		$data['daftar_transaksi'] = $this->m_transaksi->ambil_transaksi();

		$this->compose_view('admin/daftar_transaksi', $data);
	}

	public function proses_transaksi($id_transaksi)
	{
		$data['title'] = "Proses Transaksi";
		$data['active'] = "daftar_transaksi";
		$data['id_transaksi'] = $id_transaksi;
		$data['daftar_kendaraan'] = $this->m_kendaraan->ambil_kendaraan();
		$data['daftar_alamat'] = $this->m_pengguna->ambil_alamat_byid($this->session->userdata('id_pembeli'));
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);

		$this->compose_view('admin/proses_transaksi', $data);
	}

	public function terima_transaksi($id_transaksi)
	{
		$this->m_transaksi->terima_transaksi($id_transaksi);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Transaksi Diterima!</div>');

		redirect('daftar_transaksi');
	}

	public function tolak_transaksi($id_transaksi)
	{
		$this->m_transaksi->tolak_transaksi($id_transaksi);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Transaksi Ditolak!</div>');

		redirect('daftar_transaksi');
	}

	public function form_pengiriman($id_transaksi, $id_alamat)
	{
		$data['title'] = "Form Pengiriman";
		$data['active'] = "daftar_transaksi";
		$data['id_transaksi'] = $id_transaksi;
		$data['daftar_kendaraan'] = $this->m_kendaraan->ambil_kendaraan();
		$data['daftar_alamat'] = $this->m_pengguna->ambil_alamat_byid($this->session->userdata('id_pembeli'));
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);
		$data['alamat'] = $this->m_pengguna->ambil_alamat_byid_alamat($id_alamat);

		$this->compose_view('admin/form_pengiriman', $data);
	}

	public function kirim_kendaraan($id_transaksi)
	{
		$this->m_transaksi->kirim_kendaraan($id_transaksi);
		$this->db->set('nama_pengirim', $this->input->post('nama_pengirim'));
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Status kendaraan dikirim!</div>');

		redirect('daftar_transaksi');
	}

	public function selesai($id_transaksi)
	{
		$this->m_transaksi->selesai($id_transaksi);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data transaksi selesai!</div>');

		redirect('daftar_transaksi');
	}

	public function invoice($id_transaksi) {
		$data['title'] = "Invoice";
		$data['active'] = "daftar_pembayaran";
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);

		$this->compose_view('pembeli/invoice', $data);
	}

	public function cetak_invoice($id_transaksi) {
		$data['title'] = "Invoice";
		$data['active'] = "daftar_pembayaran";
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);

		$this->load->view('pembeli/cetak_invoice', $data);
	}
}

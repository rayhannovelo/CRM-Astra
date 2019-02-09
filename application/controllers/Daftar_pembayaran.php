<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pembayaran extends CI_Controller {

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
		$data['title'] = "Daftar Pembayaran";
		$data['title1'] = "History Pembayaran";
		$data['active'] = "daftar_pembayaran";
		$data['daftar_pembayaran'] = $this->m_transaksi->ambil_pembayaran_belum_valid();
		$data['history_pembayaran'] = $this->m_transaksi->ambil_pembayaran();

		$this->compose_view('admin/daftar_pembayaran', $data);
	}

	public function valid($id_pembayaran, $id_transaksi, $perihal)
	{
		$this->m_transaksi->terima_pembayaran($id_pembayaran);
		$this->m_transaksi->ubah_status_pembayaran($id_transaksi, urldecode($perihal));
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data pembayaran Diterima!</div>');

		redirect('daftar_pembayaran');
	}

	public function tidak_valid($id_pembayaran)
	{
		$this->m_transaksi->tolak_pembayaran($id_pembayaran);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data pembayaran Ditolak!</div>');

		redirect('daftar_pembayaran');
	}
}

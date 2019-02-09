<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pembayaran extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(2);
		$this->load->model('m_transaksi');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('manajer/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('manajer/footer');
	}

	public function index()
	{
		$data['title'] = "Laporan Pembayaran";
		$data['active'] = "daftar_pembayaran";
		$data['daftar_pembayaran'] = $this->m_transaksi->ambil_pembayaran_valid();

		$this->compose_view('manajer/laporan_pembayaran', $data);
	}
}

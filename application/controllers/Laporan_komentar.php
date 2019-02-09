<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_komentar extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(2);
		$this->load->model('m_komentar');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('manajer/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('manajer/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Komentar";
		$data['active'] = "daftar_komentar";
		$data['daftar_komentar'] = $this->m_komentar->ambil_komentar();

		$this->compose_view('manajer/laporan_komentar', $data);
	}

	public function hapus_komentar($id_komentar) {
		$this->m_komentar->hapus_komentar($id_komentar);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Komentar berhasil dihapus!</div>');
		redirect('laporan_komentar');
	}
}

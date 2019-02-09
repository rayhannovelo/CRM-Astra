<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(3);
		$this->load->model('m_komentar');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('pembeli/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('pembeli/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Komentar";
		$data['active'] = "daftar_komentar";
		$data['daftar_komentar'] = $this->m_komentar->ambil_komentar_pembeli($this->session->userdata('id_pembeli'));

		$this->compose_view('pembeli/daftar_komentar', $data);
	}

	public function tambah_komentar() {
		$data['title'] = "Daftar Komentar";
		$data['active'] = "daftar_komentar";

		$this->compose_view('pembeli/tambah_komentar', $data);
	}

	public function tambah_komentar_form() {

		$data = array(
			'id_pembeli' => $this->session->userdata('id_pembeli'),
			'komentar' => $this->input->post('komentar'),
			'tanggal_komentar' => date('Y-m-d')
		);

		$this->m_komentar->tambah_komentar($data);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Komentar berhasil dikirim!</div>');
		redirect('komentar');
	}

	public function hapus_komentar($id_komentar) {
		$this->m_komentar->hapus_komentar($id_komentar);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Komentar berhasil dihapus!</div>');
		redirect('komentar');
	}
}

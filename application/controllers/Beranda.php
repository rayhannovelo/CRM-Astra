<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_komentar');
	}

	public function index()
	{
		$this->load->model('m_kendaraan');
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan();
		$data['komentar'] = $this->m_komentar->ambil_komentar();
		$this->load->view('beranda/beranda', $data);
	}

	public function produk()
	{
		$this->load->model('m_kendaraan');
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan();
		$data['komentar'] = $this->m_komentar->ambil_komentar();

		$this->load->view('beranda/produk', $data);
	}

	public function profil()
	{
		$this->load->model('m_kendaraan');
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan();
		$data['komentar'] = $this->m_komentar->ambil_komentar();

		$this->load->view('beranda/profil', $data);
	}

	public function visi_misi()
	{
		$this->load->model('m_kendaraan');
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan();
		$data['komentar'] = $this->m_komentar->ambil_komentar();

		$this->load->view('beranda/visi_misi', $data);
	}
}

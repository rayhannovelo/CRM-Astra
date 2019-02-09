<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(3);
		$this->load->model('m_kriteria');
		$this->load->model('m_kendaraan');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('pembeli/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('pembeli/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Kendaraan";
		$data['active'] = "daftar_kendaraan";
		$data['daftar_kendaraan'] = $this->m_kendaraan->ambil_kendaraan();

		$this->compose_view('pembeli/daftar_kendaraan', $data);
	}

	public function detil($id_kendaraan)
	{
		$data['title'] = "Detil Kendaraan";
		$data['active'] = "daftar_kendaraan";
		$data['kendaraan'] = $this->m_kendaraan->ambil_kendaraan_byid($id_kendaraan);

		$this->compose_view('pembeli/detil_kendaraan', $data);
	}
}

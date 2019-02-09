<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(3);
		$this->load->model('m_pengguna');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('pembeli/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('pembeli/footer');
	}

	public function index()
	{
		$data['title'] = "Profil Pembeli";
		$data['active'] = "daftar_pembeli";
		$data['pembeli'] = $this->m_pengguna->ambil_pembeli_byid($this->session->userdata('id_pembeli'));

		$this->compose_view('pembeli/profil', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_alamat extends CI_Controller {

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
		$data['title'] = "Daftar Alamat";
		$data['active'] = "daftar_alamat";
		$data['daftar_alamat'] = $this->m_pengguna->ambil_alamat_byid($this->session->userdata('id_pembeli'));

		$this->compose_view('pembeli/daftar_alamat', $data);
	}

	public function tambah_alamat()
	{
		$data['title'] = "Form Tambah Alamat";
		$data['active'] = "daftar_alamat";

		$this->compose_view('pembeli/tambah_alamat', $data);
	}

	public function tambah_alamat_form() {
		$data = array(
			'id_pembeli' => $this->session->userdata('id_pembeli'),
			'alamat' => $this->input->post('alamat'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi'),
			'kode_pos' => $this->input->post('kode_pos')
		);

		$this->m_pengguna->tambah_alamat($data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success alert-dismissable text-center">Alamat berhasil ditambahkan!</div>');
		redirect('daftar_alamat');
	}

	public function edit_alamat($id_alamat)
	{
		$data['title'] = "Form Tambah Alamat";
		$data['active'] = "daftar_alamat";
		$data['alamat'] = $this->m_pengguna->ambil_alamat_byid_alamat($id_alamat);

		$this->compose_view('pembeli/edit_alamat', $data);
	}

	public function edit_alamat_form($id_alamat) {
		$data = array(
			'alamat' => $this->input->post('alamat'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi'),
			'kode_pos' => $this->input->post('kode_pos')
		);

		$this->m_pengguna->edit_alamat($id_alamat, $data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success alert-dismissable text-center">Alamat berhasil ditambahkan!</div>');
		redirect('daftar_alamat');
	}

	public function hapus_alamat($id_alamat) {
		$this->m_pengguna->hapus_alamat($id_alamat);
		$this->session->set_flashdata('sukses','<div class="alert alert-success alert-dismissable text-center">Alamat berhasil ditambahkan!</div>');
		redirect('daftar_alamat');
	}
}

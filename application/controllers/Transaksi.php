<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(3);
		$this->load->model('m_kendaraan');
		$this->load->model('m_pengguna');
		$this->load->model('m_transaksi');
	}

	public function compose_view($main_view, $data)
	{
		$this->load->view('pembeli/header', $data);
		$this->load->view($main_view, $data);
		$this->load->view('pembeli/footer');
	}

	public function index()
	{
		$data['title'] = "Daftar Transaksi";
		$data['active'] = "daftar_transaksi";
		$data['daftar_transaksi'] = $this->m_transaksi->ambil_daftar_transaksi_byid($this->session->userdata('id_pembeli'));

		$this->compose_view('pembeli/daftar_transaksi', $data);
	}

	public function tambah_transaksi($id_kendaraan)
	{
		$data['title'] = "Form Tambah Transaksi";
		$data['active'] = "daftar_transaksi";
		$data['daftar_kendaraan'] = $this->m_kendaraan->ambil_kendaraan_byid($id_kendaraan);
		$data['daftar_alamat'] = $this->m_pengguna->ambil_alamat_byid($this->session->userdata('id_pembeli'));
		$data['jumlah_stok'] = $this->db->get_where('kendaraan', array('id_kendaraan' => $id_kendaraan))->row()->jumlah_stok;

		$this->compose_view('pembeli/tambah_transaksi', $data);
	}

	public function tambah_transaksi_form() {
		date_default_timezone_set('Asia/Jakarta');

		$no_invoice = 'T'.str_pad($this->m_transaksi->ambil_id_transaksi_akhir() + 1,7,"0",STR_PAD_LEFT);

		$data = array(
			'id_pembeli' => $this->session->userdata('id_pembeli'),
			'id_alamat' => $this->input->post('id_alamat'),
			'id_kendaraan' => $this->input->post('id_kendaraan'),
			'no_invoice' => $no_invoice,
			'jenis_pembelian' => $this->input->post('jenis_pembelian'),
			'jumlah_beli' => $this->input->post('jumlah_pembelian'),
			'kegunaan' => $this->input->post('kegunaan'),
			'pengguna' => $this->input->post('pengguna'),
			'catatan' => $this->input->post('catatan'),
			'tanggal_transaksi' => date('Y-m-d'),
			'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
			'status_pembayaran' => 'Belum dibayar',
			'status_transaksi' => 'Sedang dikonfirmasi'
		);

		$id_transaksi = $this->m_transaksi->tambah_transaksi($data);

		$stok_sekarang = $this->db->get_where('kendaraan', array('id_kendaraan' => $this->input->post('id_kendaraan')))->row()->jumlah_stok;
		$this->db->set('jumlah_stok', $stok_sekarang - $this->input->post('jumlah_pembelian'));
		$this->db->where('id_kendaraan', $this->input->post('id_kendaraan'));
		$this->db->update('kendaraan');

		echo $stok_sekarang;

		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data transaksi Berhasil Ditambahkan! Silahkan tunggu proses konfirmasi transaksi.</div>');

		redirect('transaksi');
	}

	public function hapus_transaksi($id_transaksi, $id_kendaraan, $jumlah_beli)
	{
		$this->m_transaksi->hapus_transaksi($id_transaksi);

		$stok_sekarang = $this->db->get_where('kendaraan', array('id_kendaraan' => $id_kendaraan))->row()->jumlah_stok;
		$this->db->set('jumlah_stok', $stok_sekarang + $jumlah_beli);
		$this->db->where('id_kendaraan', $id_kendaraan);
		$this->db->update('kendaraan');

		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data Transaksi Berhasil Dihapus!</div>');

		redirect('transaksi');
	}

	public function daftar_pembayaran() {
		$data['title'] = "History Pembayaran";
		$data['title1'] = "Form Pembayaran";
		$data['active'] = "daftar_pembayaran";
		$data['daftar_transaksi'] = $this->m_transaksi->ambil_transaksi_kondisi($this->session->userdata('id_pembeli'));
		$data['daftar_pembayaran'] = $this->m_transaksi->ambil_daftar_pembayaran_byid($this->session->userdata('id_pembeli'));

		$this->compose_view('pembeli/daftar_pembayaran', $data);
	}

	public function bayar_transaksi($id_transaksi) {
		$data['title'] = "Form Pembayaran";
		$data['active'] = "daftar_pembayaran";
		$data['bayar'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);
		$data['daftar_transaksi'] = $this->m_transaksi->ambil_transaksi_kondisi($this->session->userdata('id_pembeli'));
		$data['daftar_pembayaran'] = $this->m_transaksi->ambil_daftar_pembayaran_byid($this->session->userdata('id_pembeli'));

		$this->compose_view('pembeli/bayar_transaksi', $data);
	}

	public function bayar_transaksi_form() {
		$data = array(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'perihal' => $this->input->post('perihal'),
			'bank_pengirim' => $this->input->post('bank_pengirim'),
			'nomor_rekening' => $this->input->post('nomor_rekening'),
			'nama_pengirim' => $this->input->post('nama_pengirim'),
			'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
			'jumlah_pembayaran' => $this->input->post('jumlah_pembayaran'),
			'foto_pembayaran' => $this->input->post('foto_pembayaran'),
			'catatan' => $this->input->post('catatan'),
			'jumlah_pembelian' => $this->input->post('jumlah_pembelian')
		);

		$this->m_transaksi->tambah_pembayaran($data);

		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data transaksi Berhasil Ditambahkan! Silahkan tunggu proses konfirmasi transaksi.</div>');

		redirect('transaksi/daftar_pembayaran');
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

	public function selesai($id_transaksi)
	{
		$this->m_transaksi->selesai($id_transaksi);
		$this->session->set_flashdata('hasil','<div class="alert alert-success text-center">Data transaksi selesai!</div>');

		redirect('transaksi');
	}
}

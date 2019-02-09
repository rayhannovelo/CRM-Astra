<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_transaksi extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->simple_login->cek_login(2);
        $this->load->model('m_transaksi');
        $this->load->model('m_pengguna');
    }

    public function compose_view($main_view, $data)
    {
        $this->load->view('manajer/header', $data);
        $this->load->view($main_view, $data);
        $this->load->view('manajer/footer');
    }

    public function index()
    {
        $data['title'] = "Laporan Transaksi";
        $data['active'] = "daftar_transaksi";
        $data['daftar_transaksi'] = $this->m_transaksi->ambil_transaksi();

        $this->compose_view('manajer/laporan_transaksi', $data);
    }

    public function invoice($id_transaksi) {
        $data['title'] = "Form Pembayaran";
        $data['active'] = "daftar_transaksi";
        $data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);

        $this->compose_view('pembeli/invoice', $data);
    }

    public function cetak_invoice($id_transaksi) {
        $data['title'] = "Invoice";
        $data['active'] = "daftar_transaksi";
        $data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);

        $this->load->view('pembeli/cetak_invoice', $data);
    }

    public function profil($id_pembeli)
    {
        $data['title'] = "Profil Pembeli";
        $data['active'] = "daftar_transaksi";
        $data['pembeli'] = $this->m_pengguna->ambil_pembeli_byid($id_pembeli);

        $this->compose_view('pembeli/profil', $data);
    }
}

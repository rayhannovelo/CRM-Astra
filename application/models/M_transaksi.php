<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

    public function ambil_transaksi() {
        $this->db->join('kendaraan', 'kendaraan.id_kendaraan = transaksi.id_kendaraan');
        $this->db->join('alamat_pembeli', 'alamat_pembeli.id_alamat = transaksi.id_alamat');
        $this->db->join('pembeli', 'pembeli.id_pembeli = transaksi.id_pembeli');
        $this->db->order_by('id_transaksi', 'DESC');
        return $this->db->get('transaksi')->result_array();
    }

    public function ambil_id_transaksi_akhir() {
        return $this->db->select('id_transaksi')->order_by('id_transaksi','desc')->limit(1)->get('transaksi')->row('id_transaksi');
    }

    public function ambil_daftar_transaksi_byid($id_pembeli) {
        $this->db->join('kendaraan', 'kendaraan.id_kendaraan = transaksi.id_kendaraan');
        $this->db->where('id_pembeli', $id_pembeli);
        $this->db->order_by('id_transaksi', 'DESC');
        return $this->db->get('transaksi')->result_array();
    }

    public function ambil_transaksi_byid($id_transaksi) {
        $this->db->join('kendaraan', 'kendaraan.id_kendaraan = transaksi.id_kendaraan');
        $this->db->join('alamat_pembeli', 'alamat_pembeli.id_alamat = transaksi.id_alamat');
        $this->db->join('pembeli', 'pembeli.id_pembeli = transaksi.id_pembeli');
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get('transaksi')->result_array();
    }

    public function ambil_transaksi_kondisi($id_pembeli) {
        $this->db->where('id_pembeli', $id_pembeli);
        $this->db->where('status_transaksi', 'Transaksi Diterima');
        $this->db->where('status_pembayaran', 'Belum dibayar');
        return $this->db->get('transaksi')->result_array();
    }

    public function tambah_transaksi($data) {
        $this->db->insert('transaksi', $data);
        return $this->db->insert_id();
    }

    public function edit_transaksi($id_transaksi, $data) {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', $data);
    }

    public function hapus_transaksi($id_transaksi) {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->delete('transaksi');
    }   

    public function terima_transaksi($id_transaksi) {
        $this->db->set('status_transaksi', 'Transaksi Diterima');
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
    }

    public function tolak_transaksi($id_transaksi) {
        $this->db->set('status_transaksi', 'Transaksi Ditolak');
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
    }

    public function kirim_kendaraan($id_transaksi) {
        $this->db->set('status_transaksi', 'Dikirim');
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
    }

    public function selesai($id_transaksi) {
        $this->db->set('status_pembayaran', 'Lunas');
        $this->db->set('status_transaksi', 'Selesai');
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
    }

    // pembayaran

    public function ambil_pembayaran() {
        $this->db->join('transaksi', 'transaksi.id_transaksi = pembayaran.id_transaksi');
        $this->db->order_by('id_pembayaran', 'DESC');
        return $this->db->get('pembayaran')->result_array();
    }

    public function ambil_pembayaran_belum_valid() {
        $this->db->join('transaksi', 'transaksi.id_transaksi = pembayaran.id_transaksi');
        $this->db->where('status', 'Sedang diverifikasi');
        $this->db->order_by('id_pembayaran', 'DESC');
        return $this->db->get('pembayaran')->result_array();
    }

    public function ambil_pembayaran_valid() {
        $this->db->join('transaksi', 'transaksi.id_transaksi = pembayaran.id_transaksi');
        $this->db->where('status', 'Valid');
        $this->db->order_by('id_pembayaran', 'DESC');
        return $this->db->get('pembayaran')->result_array();
    }

    public function ambil_daftar_pembayaran_byid($id_pembeli) {
        $this->db->join('transaksi', 'transaksi.id_transaksi = pembayaran.id_transaksi');
        $this->db->where('transaksi.id_pembeli', $id_pembeli);
        $this->db->order_by('id_pembayaran', 'DESC');
        return $this->db->get('pembayaran')->result_array();
    }

    public function tambah_pembayaran($data) {
        $config['upload_path'] = "./assets/img/bukti_pembayaran/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|img|psd|tiff|wmf';
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("foto_pembayaran")) 
        {
            $upload = $this->upload->data();
            $data['foto_pembayaran'] = $upload['file_name'];

            // create thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $config['upload_path'] . $upload['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 280;
            $config['height']       = 210;
        }

        $data = array(
            'id_transaksi' => $data['id_transaksi'],
            'perihal' => $data['perihal'],
            'bank_pengirim' => $data['bank_pengirim'],
            'nomor_rekening' => $data['nomor_rekening'],
            'nama_pengirim' => $data['nama_pengirim'],
            'tanggal_pembayaran' => $data['tanggal_pembayaran'],
            'jumlah_pembayaran' => $data['jumlah_pembayaran'],
            'foto_pembayaran' => $data['foto_pembayaran'],
            'catatan' => $data['catatan'],
            'status' => 'Sedang diverifikasi'
        );

        $this->db->insert('pembayaran', $data);

        if($data['perihal'] == "Pembayaran Kredit") {
            $this->db->set('status_pembayaran', 'Pembayaran Kredit');
        }elseif($data['perihal'] == "Pembayaran Lunas (1x Bayar)"){
            $this->db->set('status_pembayaran', 'Lunas');
        }elseif($data['perihal'] == "Pembayaran DP") {
            $this->db->set('status_pembayaran', 'Pembayaran DP');
        }
    }

    public function terima_pembayaran($id_pembayaran) {
        $this->db->set('status', 'Valid');
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->update('pembayaran');

        /* $this->db->reset_query();

        if($perihal == "Pembayaran Kredit") {
            $this->db->set('status_pembayaran', 'Pembayaran Kredit');
            $this->db->set('status_transaksi', 'Proses Pembayaran');
        }elseif($perihal == "Pembayaran Lunas (1x Bayar)"){
            $this->db->set('status_pembayaran', 'Lunas');
            $this->db->set('status_transaksi', 'Proses Pengiriman');
        }elseif($perihal == "Pembayaran DP") {
            $this->db->set('status_pembayaran', 'Pembayaran DP');
            $this->db->set('status_transaksi', 'Proses Pembayaran');
        }
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi'); */
    }

    public function ubah_status_pembayaran($id_transaksi, $perihal) {
        echo $perihal;
        if($perihal == "Pembayaran Kredit") {
            $status_pembayaran = 'Pembayaran Kredit';
            $status_transaksi = 'Proses Pembayaran';
        }elseif($perihal == "Pembayaran Lunas (1x Bayar)"){
            $status_pembayaran = 'Lunas';
            $status_transaksi = 'Proses Pengiriman';
        }elseif($perihal == "Pembayaran DP") {
            $status_pembayaran =  'Pembayaran DP';
            $status_transaksi = 'Proses Pembayaran';
        }
        $this->db->set('status_pembayaran', $status_pembayaran);
        $this->db->set('status_transaksi', $status_transaksi);
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
    }

    public function tolak_pembayaran($id_pembayaran) {
        $this->db->set('status', 'Tidak Valid');
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->update('pembayaran');
    }
}
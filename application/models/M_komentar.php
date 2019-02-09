<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_komentar extends CI_Model{

    public function ambil_komentar() {
        $this->db->join('pembeli', 'pembeli.id_pembeli = komentar.id_pembeli');
        return $this->db->get('komentar')->result_array();
    }

    public function ambil_komentar_pembeli($id_pembeli) {
        $this->db->where('id_pembeli', $id_pembeli);
        return $this->db->get('komentar')->result_array();
    }

    public function ambil_komentar_byid($id_komentar) {
        $this->db->where('id_komentar', $id_komentar);
        return $this->db->get('komentar')->result_array();
    }

    public function tambah_komentar($data) {
        $this->db->insert('komentar', $data);
    }

    public function hapus_komentar($id_komentar) {
        $this->db->where('id_komentar', $id_komentar);
        $this->db->delete('komentar');
        return $this->db->affected_rows();
    }
}
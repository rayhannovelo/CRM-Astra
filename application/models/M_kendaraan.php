<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kendaraan extends CI_Model{

    public function ambil_kendaraan() {
        return $this->db->get('kendaraan')->result_array();
    }

    public function ambil_kendaraan_byid($id_kendaraan) {
        $this->db->where('id_kendaraan', $id_kendaraan);
        return $this->db->get('kendaraan')->result_array();
    }

    public function tambah_kendaraan($data) {
        $config['upload_path'] = "./assets/img/kendaraan/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|img|psd|tiff|wmf';
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("foto_kendaraan")) 
        {
            $upload = $this->upload->data();
            $data['foto_kendaraan'] = $upload['file_name'];

            // create thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $config['upload_path'] . $upload['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 280;
            $config['height']       = 210;
            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            $data['thumbnail_kendaraan'] = str_replace($upload['file_ext'], "_thumb" . $upload['file_ext'], $upload['file_name']);
        }

        $data = array(
            'kategori' => $data['kategori'],
            'tipe' => $data['tipe'],
            'warna' => $data['warna'],
            'harga' => $data['harga'],
            'harga_dp' => $data['harga_dp'],
            'foto_kendaraan' => $data['foto_kendaraan'],
            'thumbnail_kendaraan' => $data['thumbnail_kendaraan'],
            'deskripsi' => $data['deskripsi']
        );

        $this->db->insert('kendaraan', $data);
    }

    public function edit_kendaraan($id_kendaraan, $data) {
        $config['upload_path'] = "./assets/img/kendaraan/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|img|psd|tiff|wmf';
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("foto_kendaraan_baru")) 
        {
            $upload = $this->upload->data();
            echo $data['foto_kendaraan'] = $upload['file_name'];

            // create thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $config['upload_path'] . $upload['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 280;
            $config['height']       = 210;
            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            echo $data['thumbnail_kendaraan'] = str_replace($upload['file_ext'], "_thumb" . $upload['file_ext'], $upload['file_name']);

            if (file_exists("./assets/img/kendaraan/" . $data['foto_kendaraan_lama']))
                unlink("./assets/img/kendaraan/" . $data['foto_kendaraan_lama']);   
            if (file_exists("./assets/img/kendaraan/" . $data['thumbnail_kendaraan_lama'])) 
                unlink("./assets/img/kendaraan/" . $data['thumbnail_kendaraan_lama']);

            echo 'aaa';
        }else{
            $data['foto_kendaraan'] = $data['foto_kendaraan_lama'];
            $data['thumbnail_kendaraan'] = $data['thumbnail_kendaraan_lama'];
            echo 'bbb';
        }

        $data = array(
            'kategori' => $data['kategori'],
            'tipe' => $data['tipe'],
            'warna' => $data['warna'],
            'harga' => $data['harga'],
            'harga_dp' => $data['harga_dp'],
            'foto_kendaraan' => $data['foto_kendaraan'],
            'thumbnail_kendaraan' => $data['thumbnail_kendaraan'],
            'deskripsi' => $data['deskripsi']
        );

        $this->db->where('id_kendaraan', $id_kendaraan);
        $this->db->update('kendaraan', $data);
    }

    public function hapus_kendaraan($id_kendaraan) {
        $this->db->where('id_kendaraan', $id_kendaraan);
        $this->db->delete('kendaraan');
    }   
}
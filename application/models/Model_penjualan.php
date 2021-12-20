<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penjualan extends CI_Model {
    
    public function insert_data($data)
    {
        $this->db->insert('penjualan', $data);
    }

    public function edit_data($id, $data)
    {
        $this->db->where('kd_barang', $id);
        $this->db->update('penjualan', $data);
    }

    public function get_data()
    {
        return $this->db->get('penjualan')->result();
    }

    public function get_kd_barang($id)
    {
        return $this->db->get_where('penjualan', ['kd_barang'=>$id])->result();
    }

    public function delete_data($id)
    {
        $this->db->where('kd_barang', $id);
        $this->db->delete('penjualan');
    }
}

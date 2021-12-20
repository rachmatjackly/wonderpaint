<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_persediaan extends CI_Model {
    
    public function insert_data($data)
    {
        $this->db->insert('persediaan', $data);
    }
    
    public function insert_data_masuk($data)
    {
        $this->db->insert('dataMasuk', $data);
    }

    public function insert_data_keluar($data)
    {
        $this->db->insert('datakeluar', $data);
    }

    public function edit_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('persediaan', $data);
    }

    public function edit_data_masuk($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('datakeluar', $data);
    }

    public function edit_data_keluar($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('datakeluar', $data);
    }

    public function get_data()
    {
        return $this->db->get('persediaan')->result();
    }

    public function get_data_masuk()
    {
        return $this->db->get('dataMasuk')->result();
    }

    public function get_data_keluar()
    {
        return $this->db->get('datakeluar')->result();
    }

    public function get_id($id)
    {
        return $this->db->get_where('persediaan', ['id'=>$id])->result();
    }

    public function get_data_masuk_id($id)
    {
        return $this->db->get_where('datakeluar', ['id'=>$id])->result();
    }

    public function get_data_keluar_id($id)
    {
        return $this->db->get_where('datakeluar', ['id'=>$id])->result();
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('persediaan');
    }

    public function delete_data_masuk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('datakeluar');
    }

    public function delete_data_keluar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('datakeluar');
    }
}

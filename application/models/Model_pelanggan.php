<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {
    
    public function insert_data($data)
    {
        $this->db->insert('pelanggan', $data);
    }

    public function edit_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pelanggan', $data);
    }

    public function get_data()
    {
        return $this->db->get('pelanggan')->result();
    }

    public function get_id($id)
    {
        return $this->db->get_where('pelanggan', ['id'=>$id])->result();
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pelanggan');
    }
}

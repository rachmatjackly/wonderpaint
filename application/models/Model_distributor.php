<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_distributor extends CI_Model {
    
    public function insert_data($data)
    {
        $this->db->insert('distributor', $data);
    }

    public function edit_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('distributor', $data);
    }

    public function get_data()
    {
        return $this->db->get('distributor')->result();
    }

    public function get_id($id)
    {
        return $this->db->get_where('distributor', ['id'=>$id])->result();
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('distributor');
    }
}

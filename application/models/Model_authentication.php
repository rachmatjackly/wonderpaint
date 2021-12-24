<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_authentication extends CI_Model {
    
    public function get_data($username)
    {
        return $this->db->get_where('user',['username'=> $username])->result_array();
    }

    public function get_data_by_kd_akses($kd_akses)
    {
        return $this->db->get_where('user',['kd_akses'=> $kd_akses])->result_array();
    }

    public function get_num_rows($data)
    {
        $this->db->where('username', $data);
        return $this->db->get('user')->num_rows();
    }

    public function insert_data($data)
    {
        $this->db->insert('user', $data);
    }

    public function register($data)
    {
        $this->db->insert('user', $data);
    }

    public function login($data)
    {
        $checkRow = $this->db->get_where('tbl_user',["nama" => $data['nama']])->num_rows();
        if($checkRow > 0){
            $user = $this->db->get_where('tbl_user',["nama" => $data['nama']])->result();
            foreach($user as $us){
                $password = password_verify($data['password'], $us->password);
                if($password){
                    redirect('home');
                }
            }
        }else{
            $this->session->set_flashdata('gagalLogin', '1');
            redirect('login', 'refresh');
        }
    }
}

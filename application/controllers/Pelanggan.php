<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('login');
        }
        $this->load->model('Model_pelanggan');
    }

    public function index()
    {
        $data['pelanggan'] = $this->Model_pelanggan->get_data();
        $this->load->view('templates/header');
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
        if(isset($_POST['simpan'])){
            $this->insert_data();
        }
    }

    public function edit()
    {
        $data['pelanggan'] = $this->Model_pelanggan->get_data();
        $this->load->view('templates/header');
        $this->load->view('pelanggan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function insert_data()
    {
        $data = array(
            "nama" => $this->input->post('nama'),
            "no_tlp" => $this->input->post('no_telp'),
            "alamat" => $this->input->post('alamat'),
            "kd_pelanggan" => $this->input->post('kd_pelanggan')
        );
        $this->Model_pelanggan->insert_data($data);
        $this->session->set_flashdata('insert', 'berhasil');
        redirect('pelanggan', 'refresh');
    }

    public function edit_data($id)
    {
        $data = array(
            "nama" => $this->input->post('nama'),
            "no_tlp" => $this->input->post('no_telp'),
            "alamat" => $this->input->post('alamat'),
            "kd_pelanggan" => $this->input->post('kd_pelanggan')
        );
        $this->Model_pelanggan->edit_data($id,$data);
        $this->session->set_flashdata('edit', 'berhasil');
        redirect('pelanggan/edit', 'refresh');
    }

    public function delete_data($id)
    {
        $this->Model_pelanggan->delete_data($id);
        $this->session->set_flashdata('delete', 'berhasil');
        redirect('pelanggan/edit');
    }

}
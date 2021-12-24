<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_distributor');
    }

    public function index()
    {
        $data['distributor'] = $this->Model_distributor->get_data();
        $this->load->view('templates/header');
        $this->load->view('distributor/index', $data);
        $this->load->view('templates/footer');
        if(isset($_POST['simpan'])){
            $this->insert_data();
        }
    }

    public function edit()
    {
        $data['distributor'] = $this->Model_distributor->get_data();
        $this->load->view('templates/header');
        $this->load->view('distributor/edit', $data);
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
        $this->Model_distributor->insert_data($data);
        $this->session->set_flashdata('insert', 'berhasil');
        redirect('distributor', 'refresh');
    }

    public function edit_data($id)
    {
        $data = array(
            "nama" => $this->session->nama,
            "no_tlp" => $this->session->no_telp,
            "alamat" => $this->session->alamat,
            "kd_pelanggan" => $this->session->kd_pelanggan
        );
        $this->Model_distributor->edit_data($id, $data);
        $this->session->set_flashdata('edit', 'berhasil');
        redirect('distributor/edit', 'refresh');
    }

    public function delete_data($id)
    {
        $this->Model_distributor->delete_data($id);
        $this->session->set_flashdata('delete', 'berhasil');
        redirect('distributor/edit', 'refresh');
    }
}
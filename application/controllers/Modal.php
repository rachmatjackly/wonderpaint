<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_penjualan');
        $this->load->model('Model_pelanggan');
        $this->load->model('Model_distributor');
        $this->load->model('Model_persediaan');
    }

    public function about()
    {
        $this->load->view('modal/about');
    }

    public function penjualan()
    {
        $this->load->view('modal/penjualan/index');
    }

    public function persediaan()
    {
        $this->load->view('modal/persediaan/index');
    }

    public function pelanggan()
    {
        $this->load->view('modal/pelanggan/index');
    }

    public function distributor()
    {
        $this->load->view('modal/distributor/index');
    }

    public function data_masuk()
    {
        $this->load->view('modal/persediaan/data_masuk/index');
    }

    public function data_keluar()
    {
        $this->load->view('modal/persediaan/data_keluar/index');
    }

    public function edit_penjualan()
    {
        $id = $this->input->post('dataid');
        $data['penjualan'] = $this->Model_penjualan->get_kd_barang($id);
        $this->load->view('modal/penjualan/edit', $data);
    }

    public function edit_pelanggan()
    {
        $id = $this->input->post('dataid');
        $data['pelanggan'] = $this->Model_pelanggan->get_id($id);
        $this->load->view('modal/pelanggan/edit', $data);
    }

    public function edit_distributor()
    {
        $id = $this->input->post('dataid');
        $data['distributor'] = $this->Model_distributor->get_id($id);
        $this->load->view('modal/distributor/edit', $data);
    }

    public function edit_persediaan()
    {
        $id = $this->input->post('dataid');
        $data['persediaan'] = $this->Model_persediaan->get_id($id);
        $this->load->view('modal/persediaan/edit', $data);
    }

    public function edit_data_masuk()
    {
        $id = $this->input->post('dataid');
        $data['data_masuk'] = $this->Model_persediaan->get_data_masuk_id($id);
        $this->load->view('modal/persediaan/data_masuk/edit', $data);
    }

    public function edit_data_keluar()
    {
        $id = $this->input->post('dataid');
        $data['data_keluar'] = $this->Model_persediaan->get_data_keluar_id($id);
        $this->load->view('modal/persediaan/data_keluar/edit', $data);
    }
}
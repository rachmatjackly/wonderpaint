<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('login');
        }
        $this->load->model('Model_penjualan');
    }

    public function index()
    {
        $data['penjualan'] = $this->Model_penjualan->get_data();
        $text['judul'] = 'Persediaan';
        $this->load->view('templates/header', $text);
        $this->load->view('penjualan/index', $data);
        $this->load->view('templates/footer');
        if(isset($_POST['simpan'])){
            $this->insert_data();
        }
    }

    public function edit()
    {
        $data['penjualan'] = $this->Model_penjualan->get_data();
        $this->load->view('templates/header');
        $this->load->view('penjualan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function insert_data()
    {
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $total = $harga * $jumlah;
        $data = array(
            "kd_pelanggan" => $this->input->post('kd_pelanggan'),
            "kd_barang" => $this->input->post('kd_barang'),
            "nama" => $this->input->post('nama'),
            "harga" => $harga,
            "jumlah" => $jumlah,
            "total_harga" => $total,
            "pembayaran" => $this->input->post('pembayaran'),
            "keterangan" => $this->input->post('keterangan'),
            "author" => "Admin",
            "created_at" => date('Y-m-d')
        );
        $this->Model_penjualan->insert_data($data);
        $this->session->set_flashdata('insert','berhasil');
        redirect('penjualan', 'refresh');
    }

    public function edit_data($id)
    {
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $total = $harga * $jumlah;
        $data = array(
            "kd_pelanggan" => $this->input->post('kd_pelanggan'),
            "kd_barang" => $this->input->post('kd_barang'),
            "nama" => $this->input->post('nama'),
            "harga" => $harga,
            "jumlah" => $jumlah,
            "total_harga" => $total,
            "pembayaran" => $this->input->post('pembayaran'),
            "keterangan" => $this->input->post('keterangan'),
            "author" => "Admin",
            "created_at" => date('Y-m-d')
        );
        $this->Model_penjualan->edit_data($id,$data);
        $this->session->set_flashdata('edit','berhasil');
        redirect('penjualan/edit', 'refresh');
    }

    public function delete_data($id)
    {
        $this->Model_penjualan->delete_data($id);
        $this->session->set_flashdata('delete','berhasil');
        redirect('penjualan/edit', 'refresh');
    }
}
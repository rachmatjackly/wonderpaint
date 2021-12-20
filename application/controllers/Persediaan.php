<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persediaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('login');
        }
        $this->load->model('Model_persediaan');
    }

    public function index()
    {
        $data['persediaan'] = $this->Model_persediaan->get_data();
        $text['judul'] = 'Persediaan';
        $this->load->view('templates/header', $text);
        $this->load->view('persediaan/index', $data);
        $this->load->view('templates/footer');
        if(isset($_POST['simpan'])){
            $this->insert_data();
        }
    }

    public function data_masuk()
    {
        $data['data_masuk'] = $this->Model_persediaan->get_data_masuk();
        $text['judul'] = 'Persediaan';
        $this->load->view('templates/header', $text);
        $this->load->view('persediaan/data_masuk/index', $data);
        $this->load->view('templates/footer');
        if(isset($_POST['simpan'])){
            $this->insert_data_masuk();
        }
    }

    public function data_keluar()
    {
        $data['data_keluar'] = $this->Model_persediaan->get_data_keluar();
        $text['judul'] = 'Persediaan';
        $this->load->view('templates/header', $text);
        $this->load->view('persediaan/data_keluar/index', $data);
        $this->load->view('templates/footer');
        if(isset($_POST['simpan'])){
            $this->insert_data_keluar();
        }
    }

    public function edit()
    {
        $data['persediaan'] = $this->Model_persediaan->get_data();
        $this->load->view('templates/header');
        $this->load->view('persediaan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edit_masuk()
    {
        $data['data_masuk'] = $this->Model_persediaan->get_data_masuk();
        $this->load->view('templates/header');
        $this->load->view('persediaan/data_masuk/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edit_keluar()
    {
        $data['data_keluar'] = $this->Model_persediaan->get_data_keluar();
        $this->load->view('templates/header');
        $this->load->view('persediaan/data_keluar/edit', $data);
        $this->load->view('templates/footer');
    }

    public function insert_data()
    {
        $tanggal = strtotime($this->input->post('tanggal'));
        $data = array(
            'tanggal' => date('Y-m-d',$tanggal),
            'kd_barang' => $this->input->post('kd_barang'),
            'nama' => $this->input->post('nama'),
            'stok_awal' => $this->input->post('stok_awal'),
            'barang_masuk' => $this->input->post('barang_masuk'),
            'barang_keluar' => $this->input->post('barang_keluar'),
            'stok_akhir' => $this->input->post('stok_akhir'),
            'keterangan' => $this->input->post('keterangan'),
            'author' => "",
            "created_at" => date('Y-m-d')
        );
        $this->Model_persediaan->insert_data($data);
        $this->session->set_flashdata('insert', 'berhasil');
        redirect('persediaan','refresh');
    }

    public function insert_data_masuk()
    {
        $tanggal = strtotime($this->input->post('tanggal'));
        $stok_masuk = $this->input->post('stok_masuk');
        $stok_awal = $this->input->post('stok_awal');
        $jumlah = $stok_awal + $stok_masuk;
        $data = array(
            'nama_pemasok' => $this->input->post('nama_pemasok'),
            'tanggal' => date('Y-m-d',$tanggal),
            'kd_barang' => $this->input->post('kd_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'stok_awal' => $stok_awal,
            'stok_masuk' => $stok_masuk,
            'jumlah' => $jumlah,
            'keterangan' => $this->input->post('keterangan'),
            'author' => "",
            "created_at" => date('Y-m-d')
        );
        $this->Model_persediaan->insert_data_masuk($data);
        $this->session->set_flashdata('insert', 'berhasil');
        redirect('persediaan/datamasuk','refresh');
    }

    public function insert_data_keluar()
    {
        $tanggal = strtotime($this->input->post('tanggal'));
        $stok_keluar = $this->input->post('stok_keluar');
        $stok_awal = $this->input->post('stok_awal');
        $jumlah = $stok_awal + $stok_masuk;
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'tanggal' => date('Y-m-d',$tanggal),
            'kd_barang' => $this->input->post('kd_barang'),
            'stok_awal' => $stok_awal,
            'stok_keluar' => $stok_keluar,
            'jumlah' => $jumlah,
            'keterangan' => $this->input->post('keterangan'),
            'author' => "",
            "created_at" => date('Y-m-d')
        );
        $this->Model_persediaan->insert_data_keluar($data);
        $this->session->set_flashdata('insert', 'berhasil');
        redirect('persediaan/datakeluar','refresh');
    }

    public function edit_data($id)
    {
        $tanggal = strtotime($this->input->post('tanggal'));
        $data = array(
            'tanggal' => date('Y-m-d',$tanggal),
            'kd_barang' => $this->input->post('kd_barang'),
            'nama' => $this->input->post('nama'),
            'stok_awal' => $this->input->post('stok_awal'),
            'barang_masuk' => $this->input->post('barang_masuk'),
            'barang_keluar' => $this->input->post('barang_keluar'),
            'stok_akhir' => $this->input->post('stok_akhir'),
            'keterangan' => $this->input->post('keterangan'),
            'author' => "",
            "created_at" => date('Y-m-d')
        );
        $this->Model_persediaan->edit_data($id,$data);
        $this->session->set_flashdata('edit', 'berhasil');
        redirect('persediaan/edit','refresh');
    }

    public function edit_data_masuk($id)
    {
        $tanggal = strtotime($this->input->post('tanggal'));
        $stok_masuk = $this->input->post('stok_masuk');
        $stok_awal = $this->input->post('stok_awal');
        $jumlah = $stok_awal + $stok_masuk;
        $data = array(
            'nama_pemasok' => $this->input->post('nama_pemasok'),
            'tanggal' => date('Y-m-d',$tanggal),
            'kd_barang' => $this->input->post('kd_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'stok_awal' => $stok_awal,
            'stok_masuk' => $stok_masuk,
            'jumlah' => $jumlah,
            'keterangan' => $this->input->post('keterangan'),
            'author' => "",
            "created_at" => date('Y-m-d')
        );
        $this->Model_persediaan->edit_data_masuk($id,$data);
        $this->session->set_flashdata('edit', 'berhasil');
        redirect('persediaan/datamasuk/edit','refresh');
    }

    public function edit_data_keluar($id)
    {
        $tanggal = strtotime($this->input->post('tanggal'));
        $stok_masuk = $this->input->post('stok_masuk');
        $stok_awal = $this->input->post('stok_awal');
        $jumlah = $stok_awal + $stok_masuk;
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'tanggal' => date('Y-m-d',$tanggal),
            'kd_barang' => $this->input->post('kd_barang'),
            'stok_awal' => $stok_awal,
            'stok_keluar' => $stok_masuk,
            'jumlah' => $jumlah,
            'keterangan' => $this->input->post('keterangan'),
            'author' => "",
            "created_at" => date('Y-m-d')
        );
        $this->Model_persediaan->edit_data_keluar($id,$data);
        $this->session->set_flashdata('edit', 'berhasil');
        redirect('persediaan/datakeluar/edit','refresh');
    }

    public function delete_data($id)
    {
        $this->Model_persediaan->delete_data($id);
        $this->session->set_flashdata('delete', 'berhasil');
        redirect('persediaan/edit', 'refresh');
    }

    public function delete_data_masuk($id)
    {
        $this->Model_persediaan->delete_data_masuk($id);
        $this->session->set_flashdata('delete', 'berhasil');
        redirect('persediaan/datamasuk/edit', 'refresh');
    }

    public function delete_data_keluar($id)
    {
        $this->Model_persediaan->delete_data_keluar($id);
        $this->session->set_flashdata('delete', 'berhasil');
        redirect('persediaan/datakeluar/edit', 'refresh');
    }
}
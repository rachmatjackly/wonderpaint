<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('login');
        }
    }
    public function dashboard()
    {
        $this->load->view('templates/header');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    public function profile(){
        // $text['judul'] = "Home";
        // $this->load->view('templates/header');
        $this->load->view('profile');
    }

    public function penjualan()
    {
        // $text['judul'] = 'Penjualan';
        $this->load->view('templates/header');
        $this->load->view('penjualan');
        $this->load->view('templates/footer');
    }

    public function persediaan()
    {
        $text['judul'] = 'Persediaan';
        $this->load->view('templates/header', $text);
        $this->load->view('persediaan');
        $this->load->view('templates/footer');
    }

    public function pelanggan()
    {
        $this->load->view('templates/header');
        $this->load->view('pelanggan');
        $this->load->view('templates/footer');
    }

}
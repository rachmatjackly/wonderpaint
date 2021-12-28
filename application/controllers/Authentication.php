<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

    public function register(){
        $text['judul'] = "Login";
        $this->load->view('templates/login/header', $text);
        $this->load->view('authentication/register');
        if(isset($_POST['register'])){
           $this->_register();
        }
    }

    public function login()
    {
        $text['judul'] = "Login";
        $this->load->view('templates/login/header', $text);
        $this->load->view('authentication/login');
        if(isset($_POST['login'])){
            $this->_login();
        }
    }

    public function _register(){
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');      
        $password2 = $this->input->post('password2');
        $kd_akses = $this->input->post('kd_akses');
       
        if($password != $password2){
            $this->session->set_flashdata('password','gagal');
            redirect('registrasi', 'refresh');
        }
        $getNumRow = $this->Model_authentication->get_num_rows($username);
        if($getNumRow > 0){
            $this->session->set_flashdata('username','gagal');
            redirect('registrasi', 'refresh');
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        $data = array (
            "nama" => $nama,
            "username" => $username,
            "password" => $password,
            "kd_akses" => $kd_akses
        );
        $this->Model_authentication->insert_data($data);
        $this->session->set_flashdata('registrasi', 'berhasil');
        redirect('registrasi', 'refresh');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $getNumRow = $this->Model_authentication->get_num_rows($username);
        if($getNumRow > 0)
        {
            $account = $this->Model_authentication->get_data($username);
            $password = password_verify($password, $account[0]['password']);
            if($password){
                $session = array(
                    "nama_account" => $account[0]['nama'],
                    "username" => $account[0]['username'],
                    "login" => True
                );
                $this->session->set_userdata($session);
                redirect(base_url());
            }else
            {
                $this->session->set_flashdata('login', 'gagal');
                redirect('login', 'refresh');
            }
        }

        
    }

    public function verification($id)
    {
        $data['id'] = $id;
        $this->load->view('templates/login/header');
        $this->load->view('authentication/verifikasi', $data);

        if($id == "data_keluar") {
            $userdata = array(
                "id" => $this->input->post('id_data'),
                "nama_pelanggan" => $this->input->post('nama_pelanggan'),
                "tanggal" => $this->input->post('tanggal'),
                "kd_barang" => $this->input->post('kd_barang'),
                "stok_awal" => $this->input->post('stok_awal'),
                "stok_masuk" => $this->input->post('stok_masuk'),
                "keterangan" => $this->input->post('keterangan')
            );
            $this->session->set_userdata($userdata); 
        } elseif ($id == 'data_masuk') {
            $userdata = array(
                "id" => $this->input->post('id'),
                "nama_pemasok" => $this->input->post('nama_pemasok'),
                "tanggal" => $this->input->post('tanggal'),
                "kd_barang" => $this->input->post('kd_barang'),
                "nama_barang" => $this->input->post('nama_barang'),
                "stok_awal" => $this->input->post('stok_awal'),
                "stok_masuk" => $this->input->post('stok_masuk'),
                "keterangan" => $this->input->post('keterangan')
            );
            $this->session->set_userdata($userdata); 
        } elseif ($id == 'persediaan') {
            $userdata = array(
                "id" => $this->input->post('id'),
                "tanggal" => $this->input->post('tanggal'),
                "kd_barang" => $this->input->post('kd_barang'),
                "nama_barang" => $this->input->post('nama'),
                "stok_awal" => $this->input->post('stok_awal'),
                "stok_akhir" => $this->input->post('stok_akhir'),
                "barang_masuk" => $this->input->post('barang_masuk'),
                "barang_keluar" => $this->input->post('barang_keluar'),
                "keterangan" => $this->input->post('keterangan')
            );
            $this->session->set_userdata($userdata); 
        } elseif ($id == 'penjualan') {
            $userdata = array(
                "kd_pelanggan" => $this->input->post('kd_pelanggan'),
                "tanggal" => $this->input->post('tanggal'),
                "kd_barang" => $this->input->post('kd_barang'),
                "nama_barang" => $this->input->post('nama'),
                "harga" => $this->input->post('harga'),
                "jumlah" => $this->input->post('jumlah'),
                "pembayaran" => $this->input->post('pembayaran'),
                "keterangan" => $this->input->post('keterangan')
            );
            $this->session->set_userdata($userdata); 
        } elseif ($id == 'pelanggan') {
            $userdata = array(
                "id" => $this->input->post('id'),
                "nama" => $this->input->post('nama'),
                "no_telp" => $this->input->post('no_telp'),
                "alamat" => $this->input->post('alamat'),
                "kd_pelanggan" => $this->input->post('kd_pelanggan'),
            );
            $this->session->set_userdata($userdata); 
        } elseif ($id == 'distributor') {
            $userdata = array(
                "id" => $this->input->post('id'),
                "nama" => $this->input->post('nama'),
                "no_telp" => $this->input->post('no_telp'),
                "alamat" => $this->input->post('alamat'),
                "kd_pelanggan" => $this->input->post('kd_pelanggan'),
            );
            $this->session->set_userdata($userdata); 
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function submit_verification()
    {
        $param = $this->input->post('param');
        $id_param = $this->input->post('id');
        $kd_akses = $this->input->post('kd_akses');
        $password = $this->input->post('password');
        $getKdAkes = $this->Model_authentication->get_data_by_kd_akses($this->session->username,$kd_akses);
        $getAccount = $this->Model_authentication->get_data($this->session->username);
        if(count($getKdAkes) > 0) {
            $password = password_verify($password, $getAccount[0]['password']);
            if($password){
                if($param == 'data_keluar'){
                    redirect("persediaan/edit_data_keluar/" . $this->session->userdata('id'));
                } elseif ($param == 'data_masuk') {
                    redirect("persediaan/edit_data_masuk/" . $this->session->userdata('id'));
                } elseif ($param == 'persediaan') {
                    redirect("persediaan/edit_data/" . $this->session->userdata('id'));
                } elseif($param == 'penjualan') {
                    redirect("penjualan/edit_data/" . $this->session->kd_barang);
                } elseif($param == 'pelanggan') {
                    redirect("pelanggan/edit_data/" . $this->session->userdata('id'));
                } elseif($param == 'distributor') {
                    redirect("distributor/edit_data/" . $this->session->userdata('id'));
                } else {
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else {
                $this->session->set_flashdata('verification', 'gagal');
                redirect('/');
            }
        }else {
            $this->session->set_flashdata('verification', 'gagal');
            redirect('/');
        }
    }

}
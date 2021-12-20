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
            "password" => $password
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
                    "nama" => $account[0]['nama'],
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

    public function verification()
    {
        $this->load->view('templates/login/header');
        $this->load->view('authentication/verifikasi');
    }

}
<?php

class Home extends CI_Controller {

    public function index()
    {   
        $data['judul'] = "SELAMAT DATANG DI WEBSITE PEMERINTAH KOTA YOGYAKARTA";
        $this->load->helper('url'); 
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
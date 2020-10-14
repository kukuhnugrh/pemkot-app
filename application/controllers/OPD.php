<?php

class opd extends CI_Controller {

    public function index()
    {   
        $data['judul'] = "PANDUAN UNTUK ORGANISAI PERAGKAT DAERAH / OPD";
        $this->load->helper('url'); 
        $this->load->view('templates/header', $data);
        $this->load->view('subpage_1/opd');
        $this->load->view('templates/footer');
    }
}
<?php

class Mitra extends CI_Controller {

    public function index()
    {   
        $data['judul'] = "PROSEDUR KERJASAMA DAERAH";
        $this->load->helper('url'); 
        $this->load->view('templates/header', $data);
        $this->load->view('subpage_1/mitra');
        $this->load->view('templates/footer');
    }
}
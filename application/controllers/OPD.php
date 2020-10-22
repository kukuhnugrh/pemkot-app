<?php

class OPD extends CI_Controller {

    public function index()
    {   
        $data['judul'] = "PROSEDUR KERJASAMA DAERAH";
        $this->load->helper('url'); 
        $this->load->view('templates/header', $data);
        $this->load->view('subpage_1/opd');
        $this->load->view('templates/footer');
    }
}
<?php

class Evaluasi extends CI_Controller {

    public function index()
    {   
        $data['judul'] = "Evaluasi KSD";
        $this->load->helper('url'); 
        $this->load->view('templates/header', $data);
        $this->load->view('evaluasi/evaluasi');
        $this->load->view('templates/footer');
    }
}
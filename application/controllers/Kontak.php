<?php

class Kontak extends CI_Controller
{

    public function index()
    {
        $data['warnaNavBar'] = "background-color: #9FC7AA;";
        $this->load->view('templates/header', $data);
        $this->load->view('kontak/index');
        $this->load->view('templates/footer');
    }
}

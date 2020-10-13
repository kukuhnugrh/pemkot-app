<?php

class Panduan_4 extends CI_Controller {

    public function index()
    {   
         
        $this->load->helper('url'); 
     
        $this->load->view('panduan_mitra/menu_4');
        
    }
}
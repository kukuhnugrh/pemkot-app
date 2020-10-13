<?php
Class Login extends CI_Controller{
	public function index(){
    	$data['judul'] = "Login Mitra";
        $this->load->helper('url');
		$this->load->view('subpage_1/login');
		$this->load->view('templates/footer');
    }

}
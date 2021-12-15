<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'About Us';
        $this->load->view('user/desain/header', $data);
        $this->load->view('user/desain/navbar');
        $this->load->view('user/about');
        $this->load->view('user/desain/footer');
    }
}

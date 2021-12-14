<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Product';
        $this->load->view('user/desain/header', $data);
        $this->load->view('user/desain/navbar');
        $this->load->view('user/katalog');
        $this->load->view('user/desain/footer');
    }
}

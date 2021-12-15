<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'News';
        $this->load->view('user/desain/header', $data);
        $this->load->view('user/desain/navbar');
        $this->load->view('user/blog');
        $this->load->view('user/desain/footer');
    }
}

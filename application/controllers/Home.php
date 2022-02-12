<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        $this->load->view('home/v_home');
    }

    public function informasi()
    {
        $data = [
            'title' => 'Informasi'
        ];
        $this->load->view('layout/v_header', $data);
        $this->load->view('home/v_informasi');
    }
}

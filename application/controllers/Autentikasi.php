<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentikasi extends CI_Controller
{

    // torang beking dulu variable for simpan model pe lokasi.
    // protected $model = '';

    public function index()
    {
        // load torang pe models
        $this->load->view('templates/header');
        $this->load->view('autentikasi/login');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
    }
}

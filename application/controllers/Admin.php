<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('autentikasi');
            redirect($url);
        };
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content.php');
        $this->load->view('dashboard/content.php');
        $this->load->view('templates/footer');
    }

    //loms tu komponen admin dg user se pisah ne di views...

    // public function dashboard()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/head_content.php');
    //     $this->load->view('dashboard/content.php');
    //     $this->load->view('templates/footer');
    // }
}

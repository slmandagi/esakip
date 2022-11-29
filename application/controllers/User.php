<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content.php');
        $this->load->view('dashboard/tbl_user.php');
        $this->load->view('templates/footer');
    }

    public function dokumen()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_user.php');
        $this->load->view('dashboard/upload_doc.php');
        $this->load->view('templates/footer');
    }
}

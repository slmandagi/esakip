<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentikasi extends CI_Controller
{

    // torang beking dulu variable for simpan model pe lokasi.
    // protected $model = '';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'Mlogin');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('autentikasi/view-login');
        $this->load->view('templates/footer');
    }

    //autentikasi so bisa cuman nda tau kenapa tu style di view-logout so ilang dpe css wkwkwk i dunno why...

    function autentikasi()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        $validasi_email = $this->Mlogin->query_validasi_email($email);
        if ($validasi_email->num_rows() > 0) {
            $validate_ps = $this->Mlogin->query_validasi_password($email, $password);
            if ($validate_ps->num_rows() > 0) {
                $x = $validate_ps->row_array();
                if ($x['user_status'] == '1') {
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $email);
                    $id = $x['user_id'];

                    if ($x['user_akses'] == '1') { //untuk login sebagai admin
                        $name = $x['user_name'];
                        $this->session->set_userdata('access', 'Administrator');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect('admin');
                    } else if ($x['user_akses'] == '2') { //untuk login sebagai user
                        $name = $x['user_name'];
                        $this->session->set_userdata('access', 'User');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect('user');
                    }

                    //pesan yang mo timbul pas kalo salah input
                } else {
                    $url = base_url('autentikasi');
                    echo $this->session->set_flashdata('msg', '
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
                    redirect($url);
                }
            } else {
                $url = base_url('autentikasi');
                echo $this->session->set_flashdata('msg', '
                    <h3>Uupps!</h3>
                    <p>Password yang kamu masukan salah.</p>');
                redirect($url);
            }
        } else {
            $url = base_url('autentikasi');
            echo $this->session->set_flashdata('msg', '
            <h3>Uupps!</h3>
            <p>Email yang kamu masukan salah.</p>');
            redirect($url);
        }
    }

    //function for loguout
    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('autentikasi');
        redirect($url);
    }
}

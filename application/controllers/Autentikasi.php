<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentikasi extends CI_Controller
{

    // torang beking dulu variable for simpan model pe lokasi.
    // protected $model = '';

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Email tidak sesuai',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Kata sandi harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            // load torang pe models
            $this->load->view('templates/header');
            $this->load->view('autentikasi/login');
            $this->load->view('templates/footer');
        } else {
            $this->login();
        }
    }

    //function login blum ta redirect ke dashbord admin... why????

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // var_dump($user);
        // die;

        // ada user
        if ($user) {
            // jika user active
            if ($user['is_active'] ==  1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name'],
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('Admin');
                    } else {
                        redirect('User');
                    }
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('Autentikasi');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email belum diaktivasi!</div>');
                redirect('Autentikasi');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
            redirect('Autentikasi');
        }
    }


    // public function registrasi()
    // {
    // }
}

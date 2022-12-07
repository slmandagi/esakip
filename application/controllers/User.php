<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['user'] = 'user';

        $data['judul_halaman'] = "Dashboard";
        $data['judul_header_page'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content.php', $data);
        $this->load->view('user/dashboard/content');
        $this->load->view('templates/footer');
    }

    // public function dokumen()
    // {
    //     $data['judul_halaman'] = 'Dokumen';
    //     $data['judul_header_page'] = 'Dokumen';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar_user');
    //     $this->load->view('templates/head_user.php', $data);
    //     $this->load->view('dashboard/upload_doc.php');
    //     $this->load->view('templates/footer');
    // }

    public function perencanaan_kinerja()
    {
        $data['user'] = 'user';

        $data['judul_halaman'] = 'Perencanaan Kinerja';
        $data['judul_header_page'] = 'Perencanaan Kinerja';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('user/dokumensakip/perencanaan');
        $this->load->view('templates/footer');
    }

    public function pengukuran_kinerja()
    {
        # code...
        $data['user'] = 'user';

        $data['judul_halaman'] = 'Pengukuran Kinerja';
        $data['judul_header_page'] = 'Pengukuran Kinerja';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('user/dokumensakip/pengukuran');
        $this->load->view('templates/footer');
    }

    public function pelaporan_kinerja()
    {
        # code...
        $data['user'] = 'user';

        $data['judul_halaman'] = 'Pelaporan Kinerja';
        $data['judul_header_page'] = 'Pelaporan Kinerja';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('user/dokumensakip/pelaporan');
        $this->load->view('templates/footer');
    }

    public function informasi()
    {
        $data['user'] = 'user';

        $data['judul_halaman'] = 'Informasi';
        $data['judul_header_page'] = 'Informasi';
        # code...
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('user/informasi/index');
        $this->load->view('templates/footer');
    }

    public function faq()
    {
        # code...
        $data['user'] = 'user';

        $data['judul_halaman'] = 'FAQ';
        $data['judul_header_page'] = 'FAQ';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('templates/faq');
        $this->load->view('templates/footer');
    }

    public function notification()
    {
        # code...
        $data['user'] = 'user';
        $data['judul_halaman'] = 'Notification';
        $data['judul_header_page'] = 'Notification';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('templates/notification');
        $this->load->view('templates/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Muser');
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('autentikasi');
            redirect($url);
        };

        if ($this->session->userdata('access') != 'User') {
            $url = base_url('admin_sakip_sulut');
            redirect($url);
        };

        $this->load->model('Table');
    }

    public function index()
    {
        $data['user'] = 'user';

        $opd = $this->session->userdata('name');
        $data['judul_halaman'] = "Dashboard";
        $data['judul_header_page'] = "Dashboard";
        $model = 'tbl_dokumen_user';

        $config['base_url'] = site_url('user/index/'); // ini langsung link ke controller
        $config['uri_segment'] = 3;
        $table_dashboard['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config['total_rows'] = $this->Muser->total_data($opd, $model);

        if ($table_dashboard['page'] == 0) {
            if ($this->session->per_page == 0) {
                $this->session->per_page = 5;
            }
            if ((int)$this->input->get('banyaknya-data')) {
                $this->session->per_page = (int)$this->input->get('banyaknya-data');
            }
        }

        $config['per_page'] = $this->session->per_page;
        $config['num_links'] = 2; // ini mo tentukan ada berapa angka yg mo tampil di tombol pagination
        $config['first_link'] = '<<';
        $config['next_link'] = 'Selanjutnya >';
        $config['prev_link'] = '< Sebelumnya';

        $this->pagination->initialize($config);
        $table_dashboard = array(
            'all_docs' => $this->Muser->get_table($opd, $model, $config['per_page'], $table_dashboard['page'])
        );

        $table_dashboard['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content.php', $data);
        $this->load->view('user/dashboard/content', $table_dashboard);
        $this->load->view('templates/footer');
    }

    public function perencanaan_kinerja()
    {
        //upload config....
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('File_dok')) {
            $data['user'] = 'user';
            $getsurat = $this->Mdoc->getSuratData();
            $data['jenis_surat'] = $getsurat;

            $data['judul_halaman'] = 'Perencanaan Kinerja';
            $data['judul_header_page'] = 'Perencanaan Kinerja';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user');
            $this->load->view('templates/head_content', $data);
            $this->load->view('user/dokumensakip/perencanaan', $data);
            $this->load->view('templates/footer');
        } else {
            $jenis_dok  = $this->input->post('jenis_dok');
            $nama_dok   = $this->input->post('nama_dok');
            $File_dok   = $this->input->post('File_dok');

            $data = array(
                'opd'           => $this->session->userdata('name'),
                'nama_dok'      => $nama_dok,
                'jenis_dok'     => $jenis_dok,
                'date'          => date("Y-m-d"),
                'file_name'     => $File_dok,
            );

            $upload_data = $this->upload->data();
            //mengambil file_name... 
            $data['file_name'] = $upload_data['file_name'];
            //untuk kirim ke database..
            $insert = $this->Muser->tambah_dokumen($data);

            if ($insert) {
                redirect('user/index');
            } else {
                echo "Gagal";
            }
        }
    }

    public function pengukuran_kinerja()
    {
        //upload config....
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload');
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('file')) {
            # code...
            $data['user'] = 'user';

            $getsurat = $this->Mdoc->getTriwulan();
            $data['jenis_surat'] = $getsurat;

            $data['judul_halaman'] = 'Pengukuran Kinerja';
            $data['judul_header_page'] = 'Pengukuran Kinerja';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user');
            $this->load->view('templates/head_content', $data);
            $this->load->view('user/dokumensakip/pengukuran', $data);
            $this->load->view('templates/footer');
        } else {
            $opd        = $this->session->userdata('name');
            $nama_dok   = $this->input->post('nama_dok');
            $inpTri     = $this->input->post('inpTri');
            $date       = date("Y-m-d");
            $file       = $this->input->post('file');

            $data = array(
                'opd'       => $opd,
                'nama_dok'  => $nama_dok,
                'jenis_dok' => $inpTri,
                'date'      => $date,
                'file_name' => $file
            );

            $upload_data = $this->upload->data();
            //mengambil file_name... 
            $data['file_name'] = $upload_data['file_name'];
            //untuk kirim ke database..
            $insert = $this->Muser->tambah_dokumen($data);

            if ($insert) {
                redirect('user/index');
            } else {
                echo "Gagal";
            }
        }
    }

    public function pelaporan_kinerja()
    {
        //upload config....
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload');
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('File_dok')) {
            $data['user'] = 'user';
            $data['judul_halaman'] = 'Pelaporan Kinerja';
            $data['judul_header_page'] = 'Pelaporan Kinerja';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user');
            $this->load->view('templates/head_content', $data);
            $this->load->view('user/dokumensakip/pelaporan');

            $this->load->view('templates/footer');
        } else {
            $opd        = $this->session->userdata('name');
            $nama_dok   = $this->input->post('nama_dok');
            $jenis_dok  = 'lakip';
            $date       = date("Y-m-d");
            $File_dok   = $this->input->post('File_dok');

            $data = array(
                'opd'       => $opd,
                'nama_dok'  => $nama_dok,
                'jenis_dok' => $jenis_dok,
                'date'      => $date,
                'file_name' => $File_dok
            );

            $upload_data = $this->upload->data();
            //mengambil file_name... 
            $data['file_name'] = $upload_data['file_name'];
            //untuk kirim ke database..
            $insert = $this->Muser->tambah_dokumen($data);

            if ($insert) {
                redirect('user/index');
            } else {
                echo "Gagal";
            }
        }
    }

    public function evaluasi_kinerja()
    {
        # code...
        $data['user'] = 'user';
        $data['judul_halaman'] = 'Evaluasi Kinerja';
        $data['judul_header_page'] = 'Evaluasi Kinerja';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('user/dokumensakip/evaluasi');
        $this->load->view('templates/footer');
    }

    public function informasi()
    {
        # code...
        $data['user'] = 'user';
        $data['judul_halaman'] = 'Informasi';
        $data['judul_header_page'] = 'Informasi';

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
        $data['judul_halaman'] = 'Notifikasi';
        $data['judul_header_page'] = 'Notifikasi';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/head_content', $data);
        $this->load->view('user/notification/index');
        $this->load->view('templates/footer');
    }
}

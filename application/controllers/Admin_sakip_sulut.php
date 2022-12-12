<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin_sakip_sulut extends CI_Controller
{
    /*
            Useful links:
            - http://codeigniter.com/userguide3/libraries/pagination.html?highlight=paginatio
        */
    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('autentikasi');
            redirect($url);
        };


        // if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'username' || $_SERVER['PHP_AUTH_PW'] != 'password') {
        //     header('WWW-Authenticate: Basic realm="MyProject"');
        //     header('HTTP/1.0 401 Unauthorized');
        //     die('Access Denied');
        // }


        $this->load->model('Table');
    }

    public function index()
    {
        $data['user'] = 'admin';

        $model = 'dashboard';
        $data['judul_halaman'] = "Dashboard";
        $data['judul_header_page'] = 'Dashboard';
        // 2. torang ambe site urlnya
        $config['base_url'] = site_url('admin/index/'); // ini langsung link ke controller
        // 3. torang beking variable dan isinya
        // current page itu diambil dari nilai segment 3, segment 3 itu setelah method dari controller
        // misal: https://google.com/segment1/segment2/segment3 -> https://google.com/admin/load_data/5
        // $config['uri_segment'] = 3; // jadi torang mo ambe data yang ada di segment 3
        $config['uri_segment'] = 3;
        $table_dashboard['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config['total_rows'] = $this->Table->total_data($model);

        // $cookie = [
        //     'name' => 'per_page',
        //     'value' => $this->input->get('banyaknya-data'),
        //     'expire' => '1000',
        //     'secure' => TRUE
        // ];
        // $this->input->set_cookie($cookie);
        // $config['per_page'] = ($this->input->cookie('per_page'));

        // $per_page_input = (int)($this->input->get('banyaknya-data'));
        // if()
        // $per_page_default = 5;
        // if ($table_dashboard['page'] == 0) {
        //     if ($this->session->per_page == 0) {
        //         $this->session->per_page = 5;
        //         $config['per_page'] = $this->session->per_page;
        //         echo 'session table page ->' . $this->session->per_page;
        //     } else {
        //         $config['per_page'] = $this->session->per_page;
        //         echo 'session tablel page else ->' . $this->session->per_page;
        //     }

        //     if ((int)$this->input->get('banyaknya-data')) {
        //         $this->session->per_page = (int)$this->input->get('banyaknya-data');
        //         echo 'session table page if kedua ->' . $this->session->per_page;
        //     }
        // } else {
        //     $this->session->per_page = (int)$this->input->get('banyaknya-data');
        //     echo 'session table page else->' . $this->session->per_page;
        // }

        if ($table_dashboard['page'] == 0) {
            if ($this->session->per_page == 0) {
                $this->session->per_page = 5;
                // return $this->session->per_page;
            }
            if ((int)$this->input->get('banyaknya-data')) {
                $this->session->per_page = (int)$this->input->get('banyaknya-data');
            }
        }
        // echo 'halo';
        $config['per_page'] = $this->session->per_page;
        // $config['per_page'] = $this->session->per_page;
        // echo 'table ->' . $table_dashboard['page'];
        // echo 'config' . $config['per_page'];
        // echo  'session ->' . $this->session->per_page;

        // if()
        // $config['per_page'] = $this->session->per_page;


        $config['num_links'] = 2; // ini mo tentukan ada berapa angka yg mo tampil di tombol pagination
        $config['first_link'] = '<<';
        $config['next_link'] = 'Selanjutnya >';
        $config['prev_link'] = '< Sebelumnya';

        // echo '-' . $config['per_page'];
        // echo $table_dashboard['page'];
        // $config['use_page_numbers'] = true; // ini dpe guna, spya dpe segment 3 diambil dari nomor halaman.
        $this->pagination->initialize($config);
        $table_dashboard = array(
            'table' => $this->Table->get_table($model, $config['per_page'], $table_dashboard['page'])
        );

        // torang simpan create linksnya ke variabel
        $table_dashboard['pagination'] = $this->pagination->create_links();

        // print_r($table_dashboard['table']);
        // echo $table_dashboard['pagination'];
        /* 3 Variable: 
                1. Variabel data, for tampung keperluan tampilan(no logic).
                2. Variabel table, for tampung data table
                3. Variabel data_pagination, for mo beking pembagian data pada table.
                4. Variabel config, for atur uri.
        */

        // table_path = APPPATH . "asset";
        // $table['dashboard'] = file_get_contents("assets/json/table_dashboard.json");
        // error: cannot use object of type stdclass as array
        // solusi: pake parameter kedua dari json_decode, yaitu: true
        // https://stackoverflow.com/questions/6815520/cannot-use-object-of-type-stdclass-as-array
        //         $json = file_get_contents(FILE_PATH);
        // $obj  = json_decode($json);

        // $table_dashboard['baris'] = $this->table_dashboard->hitung_baris();
        // print_r($table_dashboard['baris']);
        // pemanggilan view

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content.php', $data);
        $this->load->view('admin/dashboard/content.php', $table_dashboard);
        $this->load->view('templates/footer');
    }


    public function perencanaan_kinerja()
    {
        $data['user'] = 'admin';
        $data['judul_halaman'] = 'Perencanaan Kinerja';
        $data['judul_header_page'] = 'Perencanaan Kinerja';
        $model = 'perencanaan_kinerja_admin';
        $config['base_url'] = site_url('admin_sakip_sulut/perencanaan_kinerja'); // ini langsung link ke controller
        $config['uri_segment'] = 3;
        $table_perencanaan['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config['total_rows'] = ceil($this->Table->total_data($model));

        if ($table_perencanaan['page'] == 0) {
            if ($this->session->per_page == 0) {
                $this->session->per_page = 5;
                // return $this->session->per_page;
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

        // $config['use_page_numbers'] = true; // ini dpe guna, spya dpe segment 3 diambil dari nomor halaman.
        $this->pagination->initialize($config);
        $table_perencanaan = array(
            'table' => $this->Table->get_table($model, $config['per_page'], $table_perencanaan['page'])
        );

        // torang simpan create linksnya ke variabel
        $table_perencanaan['pagination'] = $this->pagination->create_links();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/dokumensakip/perencanaan', $table_perencanaan);
        $this->load->view('templates/footer');
    }

    public function pengukuran_kinerja()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = "Pengukuran Kinerja";
        $data['judul_header_page'] = 'Pengukuran Kinerja';


        // $model = 'pengukuran_kinerja_admin';
        // $config['uri_segment'] = 3;
        // $table_pengukuran['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // $config['total_rows'] = $this->Table->total_data($model);

        // $cookie = [
        //     'name' => 'per_page',
        //     'value' => $this->input->get('banyaknya-data'),
        //     'expire' => '1000',
        //     'secure' => TRUE
        // ];
        // $this->input->set_cookie($cookie);
        // $config['per_page'] = ($this->input->cookie('per_page'));

        // $per_page_input = (int)($this->input->get('banyaknya-data'));
        // if()
        // $per_page_default = 5;
        // if ($table_pengukuran['page'] == 0) {
        //     if ($this->session->per_page == 0) {
        //         echo 'get not active';
        //         $this->session->per_page = 5;
        //         // return $this->session->per_page;
        //     }
        //     if ((int)$this->input->get('banyaknya-data')) {
        //         echo 'get active';
        //         $this->session->per_page = (int)$this->input->get('banyaknya-data');
        //     }
        // }
        // $config['per_page'] = $this->session->per_page;

        // $config['num_links'] = 2; // ini mo tentukan ada berapa angka yg mo tampil di tombol pagination
        // $config['first_link'] = '<<';
        // $config['next_link'] = 'Selanjutnya >';
        // $config['prev_link'] = '< Sebelumnya';

        // // $config['use_page_numbers'] = true; // ini dpe guna, spya dpe segment 3 diambil dari nomor halaman.
        // $this->pagination->initialize($config);
        // $table_pengukuran = array(
        //     'table' => $this->Table->get_table_dashboard($config['per_page'], $table_pengukuran['page'])
        // );

        // // torang simpan create linksnya ke variabel
        // $table_pengukuran['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/dokumensakip/pengukuran_');
        $this->load->view('templates/footer');
    }


    public function pelaporan_kinerja()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = "Pelaporan Kinerja";
        $data['judul_header_page'] = "Pelaporan Kinerja";
        $model = "pelaporan_kinerja_admin";
        $config['base_url'] = site_url('admin/pelaporan_kinerja'); // ini langsung link ke controller

        $config['uri_segment'] = 3;
        $table_pelaporan['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config['total_rows'] = $this->Table->total_data($model);

        // $cookie = [
        //     'name' => 'per_page',
        //     'value' => $this->input->get('banyaknya-data'),
        //     'expire' => '1000',
        //     'secure' => TRUE
        // ];
        // $this->input->set_cookie($cookie);
        // $config['per_page'] = ($this->input->cookie('per_page'));

        // $per_page_input = (int)($this->input->get('banyaknya-data'));
        // if()
        // $per_page_default = 5;
        if ($table_pelaporan['page'] == 0) {
            if ($this->session->per_page == 0) {
                $this->session->per_page = 5;
                // return $this->session->per_page;
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

        // $config['use_page_numbers'] = true; // ini dpe guna, spya dpe segment 3 diambil dari nomor halaman.
        $this->pagination->initialize($config);

        $table_pelaporan = array(
            'table' => $this->Table->get_table($model, $config['per_page'], $table_pelaporan['page'])
        );

        // torang simpan create linksnya ke variabel
        $table_pelaporan['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/dokumensakip/pelaporan', $table_pelaporan);
        $this->load->view('templates/footer');
    }

    public function evaluasi_kinerja()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'Evaluasi Kinerja';
        $data['judul_header_page'] = 'Evaluasi Kinerja';
        $model = 'evaluasi_kinerja_admin';
        // $config['base_url'] = site_url('admin/evaluasi_kinerja');
        // $config['uri_segment'] = 3;
        // $table_evaluasi['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // $config['total_rows'] = $this->Table->total_data($model);

        // if ($table_evaluasi['page'] == 0) {
        //     $this->session->per_page = 5;
        // }

        // if ((int)$this->input->get('banyaknya-data')) {
        //     $this->session->per_page = $this->input->get('banyaknya-data');
        // }
        // $config['per_page'] = $this->session->per_page;

        // $config['num_links'] = 2; // ini mo tentukan ada berapa angka yg mo tampil di tombol pagination
        // $config['first_link'] = '<<';
        // $config['next_link'] = 'Selanjutnya >';
        // $config['prev_link'] = '< Sebelumnya';

        // // $config['use_page_numbers'] = true; // ini dpe guna, spya dpe segment 3 diambil dari nomor halaman.
        // $this->pagination->initialize($config);

        // $table_evaluasi = array(
        //     'table' => $this->Table->get_table($model, $config['per_page'], $table_evaluasi['page'])
        // );

        // // torang simpan create linksnya ke variabel
        // $table_evaluasi['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/dokumensakip/evaluasi');
        $this->load->view('templates/footer');
    }


    public function profil_pengguna()
    {
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'Profil Pengguna';
        $data['judul_header_page'] = 'Profil Pengguna';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/pengaturan/profil_pengguna');
        $this->load->view('templates/footer');
    }

    public function ubah_email_password()
    {
        $data['user'] = 'admin';

        # code...
        $data['judul_halaman'] = "Pengaturan";
        $data['judul_header_page'] =  "Ubah Email & Password";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/pengaturan/ubah_email_pass');
        $this->load->view('templates/footer');
    }

    public function informasi()
    {
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'Informasi';
        $data['judul_header_page'] = 'Informasi';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/informasi/index');
        $this->load->view('templates/footer');
        # code...
    }

    public function faq()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'FAQ';
        $data['judul_header_page'] = 'FAQ';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('templates/faq');
        $this->load->view('templates/footer');
    }

    public function user_opd()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'Pengaturan';
        $data['judul_header_page'] = 'User OPD';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/pengaturan/user_opd');
        $this->load->view('templates/footer');
    }
    public function notification()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'Notifikasi';
        $data['judul_header_page'] = 'Notifikasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('templates/notification');
        $this->load->view('templates/footer');
    }

    // function download($id)
    // {
    //     $data = $this->db->get_where('perencanaan_kinerja_admin', ['id' => $id])->row();
    //     force_download('uploads/' . $data->File_dok, NULL);
    // }
};
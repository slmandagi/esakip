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

        if ($this->session->userdata('access') != 'Administrator') {
            $url = base_url('user');
            redirect($url);
        }


        // if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'username' || $_SERVER['PHP_AUTH_PW'] != 'password') {
        //     header('WWW-Authenticate: Basic realm="MyProject"');
        //     header('HTTP/1.0 401 Unauthorized');
        //     die('Access Denied');
        // }


        $this->load->model('Table');
    }

    public function index()
    {
        $data['user'] = 'admin_sakip_sulut';

        $model = 'dashboard';
        $data['judul_halaman'] = "Dashboard";
        $data['judul_header_page'] = 'Dashboard';
        // 2. torang ambe site urlnya
        $config['base_url'] = site_url('admin_sakip_sulut/index/'); // ini langsung link ke controller
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
        $data['user'] = 'admin_sakip_sulut';
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
        $data['user'] = 'admin_sakip_sulut';

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
        $data['user'] = 'admin_sakip_sulut';

        $data['judul_halaman'] = "Pelaporan Kinerja";
        $data['judul_header_page'] = "Pelaporan Kinerja";
        $model = "pelaporan_kinerja_admin";
        $config['base_url'] = site_url('admin_sakip_sulut/pelaporan_kinerja'); // ini langsung link ke controller

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
        $data['user'] = 'admin_sakip_sulut';

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
        $data['user'] = 'admin_sakip_sulut';

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
        $data['user'] = 'admin_sakip_sulut';

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
        $data['user'] = 'admin_sakip_sulut';

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
        $data['user'] = 'admin_sakip_sulut';
        $data['judul_halaman'] = 'FAQ';
        $data['judul_header_page'] = 'FAQ';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('templates/faq');
        $this->load->view('templates/footer');
    }


    public function user_opd() //$id adalah variable yang di lempar untuk edit data user..
    {
        //form validation set rules....
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim', [
            'required' => 'Nama pengguna harus diisi'
        ]);
        $this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.user_email]', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Email tidak sesuai',
            'is_unique' => 'Email ini sudah digunakan!'
        ]);
        $this->form_validation->set_rules('user_password', 'Password', 'required|trim|min_length[3]', [
            'required' => 'Kata sandi harus diisi',
            'min_length' => 'Password harus lebih dari 3 karakter',

        ]);

        if ($this->form_validation->run() == false) {


            $model = "tbl_user";
            $config['base_url'] = site_url('admin_sakip_sulut/user_opd'); // ini langsung link ke controller

            $config['uri_segment'] = 3;
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $config['total_rows'] = $this->Table->total_data($model);

            if ($data['page'] == 0) {
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

            $data = array(
                'table' => $this->Table->get_table($model, $config['per_page'], $data['page'])
            );

            // torang simpan create linksnya ke variabel
            $data['pagination'] = $this->pagination->create_links();
            ///////////////////////////////////
            $data['user'] = 'admin';
            $data['judul_halaman'] = 'Pengaturan';
            $data['judul_header_page'] = 'User OPD';

            $get_u = $this->Mregis->get_jenis_u();
            $data['jenis_u'] = $get_u; //get jenis user dari model Mregis

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/head_content', $data);
            $this->load->view('admin/pengaturan/user_opd', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'user_name' => htmlspecialchars($this->input->post('user_name', true)),
                'user_email' => htmlspecialchars($this->input->post('user_email', true)),
                'Jenis_user' => htmlspecialchars($this->input->post('Jenis_user'), true),
                'user_password' =>  md5($this->input->post("user_password")),
                'user_akses' => 2,
                'user_status' => '1',
                'date_created' => time(),
                'date_update' => time(),
            ];

            $this->db->insert('tbl_user', $data);

            // $this->_sendEmail();

            $this->session->set_flashdata('massage', '<div role="alert">Akun User berhasil didaftarkan</div>');
            redirect('admin_sakip_sulut/user_opd');
        }
    }

    public function user_status_changed()
    {
        // get hidden values in variables
        $id = $this->input->post('user_id');
        $status = $this->input->post('user_status');


        //check condition
        if ($status == '1') {
            $user_status = '0';
        }
        // else {
        //     $user_status = '1';
        // }

        $data = array('user_status' => $user_status);

        $this->db->where('user_id', $id);
        $this->db->update('tbl_user', $data); //Update status here

        //Create success measage
        $this->session->set_flashdata('msg', "User status has been changed successfully.");
        $this->session->set_flashdata('msg_class', 'alert-success');

        // $this->user_opd();
        redirect('admin_sakip_sulut/user_opd');
    }


    //function untuk mengolah edit data yang pada pages pengaturan...
    function update_data()
    {
        $id = $this->input->post('user_id');
        $data = array(
            'User_name' => $this->input->post('user_name'),
            'User_email' => $this->input->post('user_email'),
            'Jenis_user' => $this->input->post('Jenis_user'),
            'date_update' => date("Y-m-d"),
        );
        $this->Muser->update_data($id, $data);
        $this->user_opd();
    }

    //controller untuk menampilkan page edit data user//
    function show_user_id()
    {
        $id = $this->uri->segment(3);
        $data['users'] = $this->Muser->show_users();
        $data['userID'] = $this->Muser->show_user_id($id);

        $data['user'] = 'admin';
        $data['judul_halaman'] = 'Pengaturan';
        $data['judul_header_page'] = 'Update Data User';

        $get_u = $this->Mregis->get_jenis_u();
        $data['jenis_u'] = $get_u; //get jenis user dari model Mregis

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/pengaturan/update_data', $data);
        $this->load->view('templates/footer');
    }
    //end of update data..

    public function notification()
    {
        # code...
        $data['user'] = 'admin';

        $data['judul_halaman'] = 'Notifikasi';
        $data['judul_header_page'] = 'Notifikasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/head_content', $data);
        $this->load->view('admin/notification/index');
        $this->load->view('templates/footer');
    }

    // function download($id)
    // {
    //     $data = $this->db->get_where('perencanaan_kinerja_admin', ['id' => $id])->row();
    //     force_download('uploads/' . $data->File_dok, NULL);
    // }
};

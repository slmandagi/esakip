<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mupload');
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('autentikasi');
            redirect($url);
        };

        if ($this->session->userdata('access') != 'User') {
            $url = base_url('admin_sakip_sulut');
            redirect($url);
        };
    }

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


            $opd   = $this->input->post('opd');
            $jenis_dok   = $this->input->post('jenis_dok');
            $nama_dok   = $this->input->post('nama_dok');
            $File_dok  = $this->input->post('File_dok');
            $date  = $this->input->post('date');

            $data = array(
                'opd' => $opd,
                'jenis_dok' => $jenis_dok,
                'nama_dok' => $nama_dok,
                'File_dok' => $File_dok,
                'date' => $date,
            );

            $upload_data = $this->upload->data();
            //mengambil file_name... 
            $data['File_dok'] = $upload_data['file_name'];
            //untuk kirim ke database..
            $insert = $this->Mupload->input_data($data, 'perencanaan_kinerja_admin');

            if ($insert) {
                redirect('user/index');
            } else {
                echo "Gagal";
            }
        }
    }

    public function pengukuran_kinerja()
    {
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

    //upload laporan user
    function tambahLaporan()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('namaDokumen', 'NamaDokumen', 'trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('unitKerja', 'UnitKerja', 'trim|required|max_length[128]|xss_clean');

        if ($this->form_validation->run() == FALSE) {

            $this->pelaporan_kinerja();
        } else {
            //upload config....
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|docx';
            $config['max_size']             = 10000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload');
            $this->upload->initialize($config);

            $File_dok     = $this->input->post('File_dok');
            $namaDokumen    = $this->input->post('namaDokumen');
            $unitKerja      = $this->input->post('unitKerja');

            $tabelLaporan = [
                'File_dok'      => $File_dok,
                'namaDokumen'   => $namaDokumen,
                'unitKerja'     => $unitKerja,
            ];

            $upload_data = $this->upload->data();
            //mengambil file_name... 
            $tabelLaporan['File_dok'] = $upload_data['file_name'];

            $result = $this->Mupload->tambahLaporan($tabelLaporan);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }


    function download($id)
    {
        $data = $this->db->get_where('perencanaan_kinerja_admin', ['id' => $id])->row();
        force_download('uploads/' . $data->File_dok, NULL);
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

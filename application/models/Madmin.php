<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{


    function get_all_opd()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_akses', '2');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    //fungsi tambah user opd/instansi & tambah nama user ke table status dokumen
    function tambah_user($data)
    {
        //utk table user
        $this->db->insert('tbl_user', $data);

        //utk table status dokumen dan tbl pengukuran triwulan
        $opd = ['opd' => $data['user_name']];
        $this->db->insert('tbl_status_dokumen', $opd);
        $this->db->insert('tbl_pengukuran_triwulan', $opd);

        return true;
    }

    // utk menampilkan status dokumen user di dashboard
    function get_table($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        // $this->db->order_by('opd', 'ASC');
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result_array();
        return $query;
    }

    function total_data($model)
    {
        $this->load->database($model);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    // utk menampilkan data perencanaan kinerja user
    function get_table_perencanaan($model, $limit = null, $start = null)
    {
        $jen_dok = ['Renstra', 'RPJMD', 'IKU', 'Renja', 'PK', 'Rencana Aksi', 'Cascading Kinerja', 'Pohon Kinerja', 'Crosscutting'];

        $this->load->database($model);
        $this->db->order_by('jenis_dok', 'DESC');
        $this->db->or_where_in('jenis_dok', $jen_dok);
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result_array();
        return $query;
    }

    function total_data_perencanaan($model)
    {
        $jen_dok = ['Renstra', 'RPJMD', 'IKU', 'Renja', 'PK', 'Rencana Aksi', 'Cascading Kinerja', 'Pohon Kinerja', 'Crosscutting'];

        $this->load->database($model);
        $this->db->or_where_in('jenis_dok', $jen_dok);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    // utk menampilkan data pengukuran kinerja triwulan 1
    function get_table_pengukuran_t1($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->where('jenis_dok', 'triwulan1');
        // $this->db->join('tbl_dokumen_user', 'tbl_dokumen_user.opd = ' . $model . '.user_name', 'left');
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }

    // utk menampilkan data pengukuran kinerja triwulan 2
    function get_table_pengukuran_t2($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->where('jenis_dok', 'triwulan2');
        // $this->db->join('tbl_dokumen_user', 'tbl_dokumen_user.opd = ' . $model . '.user_name', 'left');
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }

    // utk menampilkan data pengukuran kinerja triwulan 3
    function get_table_pengukuran_t3($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->where('jenis_dok', 'triwulan3');
        // $this->db->join('tbl_dokumen_user', 'tbl_dokumen_user.opd = ' . $model . '.user_name', 'left');
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }

    // utk menampilkan data pengukuran kinerja triwulan 4
    function get_table_pengukuran_t4($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->where('jenis_dok', 'triwulan4');
        // $this->db->join('tbl_dokumen_user', 'tbl_dokumen_user.opd = ' . $model . '.user_name', 'left');
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }

    function total_data_pengukuran($model)
    {
        $this->load->database($model);
        $this->db->where('jenis_dok', 'triwulan1');
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    //utk tambah triwulan 1
    function tambah_triwulan($data)
    {
        $this->db->where('opd', $data['opd']);
        $this->db->update('tbl_pengukuran_triwulan', $data);

        return true;
    }

    // utk menampilkan data pelaporan tahunan kinerja user
    function get_table_pelaporan($model, $limit = null, $start = null)
    {
        $jen_dok = 'lakip';

        $this->load->database($model);
        $this->db->order_by('jenis_dok', 'DESC');
        $this->db->or_where_in('jenis_dok', $jen_dok);
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result_array();
        return $query;
    }

    function total_data_pelaporan($model)
    {
        $jen_dok = 'Laporan Kinerja Tahunan';

        $this->load->database($model);
        $this->db->or_where_in('jenis_dok', $jen_dok);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    //utk menampilkan setiap user pada page evaluasi
    function get_table_evaluasi($year, $model, $limit = null, $start = null)
    {
        if (!$year) {
            $this->load->database($model);
            $this->db->select('tbl_evaluasi.*, tbl_status_dokumen.year as years');
            $this->db->join('tbl_evaluasi', 'tbl_evaluasi.opd = tbl_status_dokumen.opd');
            $this->db->where('tbl_status_dokumen.lakip', true);
            $this->db->order_by('tbl_evaluasi.opd', 'ASC');
            $query = $this->db->get($model, $limit, $start);
            $query = $query->result_array();
            return $query;
        } else {
            $this->load->database($model);
            $this->db->select('tbl_evaluasi.*, tbl_status_dokumen.year as years');
            $this->db->join('tbl_evaluasi', 'tbl_evaluasi.opd = tbl_status_dokumen.opd');
            $this->db->order_by('tbl_evaluasi.opd', 'ASC');
            $this->db->where('tbl_status_dokumen.year', $year);
            $this->db->where('tbl_status_dokumen.lakip', true);
            $query = $this->db->get($model, $limit, $start);
            $query = $query->result_array();
            return $query;
        }
    }

    function total_data_evaluasi($year, $model)
    {
        $this->load->database($model);
        $this->db->where('year', $year);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    //utk inpurt evaluasi user dari admin
    function tambah_evaluasi($data)
    {
        $this->db->insert('tbl_evaluasi', $data);

        return true;
    }

    //ut inpurt informasi dari admin
    function input_evaluasi($data)
    {
        $this->db->insert('tbl_informasi', $data);

        return true;
    }

    // utk page informasi pesan dari admin
    function get_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_informasi');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    //utk ambil tahun
    function get_year()
    {
        $this->db->select('year');
        $this->db->from('tbl_year');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    //utk ambil tahun
    function get_user()
    {
        $this->db->where('user_akses', '2');
        $this->db->from('tbl_user');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}

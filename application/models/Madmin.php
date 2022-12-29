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

    function tambah_t1($data)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_pengukuran_triwulan', $data);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    //fungsi tambah user opd/instansi & tambah nama user ke table status dokumen
    function tambah_user($data)
    {
        //utk table user
        $this->db->insert('tbl_user', $data);

        //utk table status dokumen
        $opd = ['opd' => $data['user_name']];
        $this->db->insert('tbl_status_dokumen', $opd);

        return true;
    }

    // utk menampilkan status dokumen user di dashboard
    function get_table($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->order_by('opd', 'ASC');
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

    // utk menampilkan data pengukuran kinerja user
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
    function get_table_evaluasi($model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->order_by('user_name', 'ASC');
        $this->db->where('user_akses', '2');
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result_array();
        return $query;
    }

    function total_data_evaluasi($model)
    {
        $this->load->database($model);
        $this->db->where('user_akses', '2');
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
}

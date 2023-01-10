<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{
    // get data utk dasboard user
    function get_table($opd, $model, $limit = null, $start = null, $keyword = null)
    {
        if ($keyword) {
            $this->db->where('opd', $opd);
            $this->db->like('nama_dok', $keyword);
            $this->db->or_like('date', $keyword);
        }
        $this->load->database($model);
        $this->db->where('opd', $opd);
        // $this->db->where('opd', $opd);
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }
    function total_all_data($model, $opd)
    {
        $this->load->database($model);
        $this->db->where('opd', $opd);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    function total_data_selected($opd, $keyword)
    {
        $this->db->where('opd', $opd);
        $this->db->like('nama_dok', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->from('tbl_dokumen_user');
        return $this->db->count_all_results();
    }
    //input perencanaan, pengukuran, dan update status dokumen user
    function tambah_dokumen($data, $year)
    {
        // mengabil year yg ada di db tbl status dokumen
        $this->db->select('year');
        $this->db->where('opd', $data['opd']);
        $this->db->where('year', $year);
        $this->db->from('tbl_status_dokumen');
        $db_year = $this->db->get()->result_array();


        // memasukan data ke db
        $this->db->insert('tbl_dokumen_user', $data);

        $add_year = ['year' => date('Y')];
        $this->db->insert('tbl_year', $add_year);
        $years = '';

        foreach ($db_year as $db) {
            $years = $db['year'];
        }

        if ($year == $years) {
            $jen_dok = $data['jenis_dok'];
            $status = [$jen_dok => true, 'year' => $year];
            $this->db->where('opd', $data['opd']);
            $this->db->where('year', $year);
            $this->db->update('tbl_status_dokumen', $status);
        } else {
            $jen_dok = $data['jenis_dok'];
            $status = ['opd' => $data['opd'], $jen_dok => true, 'year' => $year];
            $this->db->where('opd', $data['opd']);
            $this->db->insert('tbl_status_dokumen', $status);
        }

        return true;
    }

    //utk mengambil nilai triwulan
    function getNilaiTriwulan($opd)
    {
        $this->db->select('*');
        $this->db->from('tbl_pengukuran_triwulan');
        $this->db->where('opd', $opd);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    // Function To Fetch All Users Record
    function show_users()
    {
        $query = $this->db->get('tbl_user');
        $query_result = $query->result();
        return $query_result;
    }

    // Update Query For Selected User
    function update_data($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_user', $data);
    }


    //function untuk update status user
    function update_status($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_user', $data);
    }

    // get data utk evaluasi user
    function get_table_evaluasi($model, $opd, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->where('opd', $opd);
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }
    function total_data_evaluasi($opd, $model)
    {
        $this->load->database($model);
        $this->db->where('opd', $opd);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    // utk page informasi pesan dari admin
    function get_info($opd)
    {
        $where = "u_tujuan= '$opd' OR u_tujuan='All'";
        $this->db->select('*');
        $this->db->from('tbl_informasi');
        $this->db->where($where);
        // $this->db->where('u_tujuan', 'All');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    // Function To Fetch Selected User Record
    function show_user_id($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $data);
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
}

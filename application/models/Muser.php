<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{
    // get data utk dasboard user
    function get_table($opd, $model, $limit = null, $start = null)
    {
        $this->load->database($model);
        $this->db->where('opd', $opd);
        $query = $this->db->get($model, $limit, $start);
        $query = $query->result();
        return $query;
    }
    function total_data($opd, $model)
    {
        $this->load->database($model);
        $this->db->where('opd', $opd);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }

    //input perencanaan, pengukuran, dan update status dokumen user
    function tambah_dokumen($data)
    {

        $this->db->insert('tbl_dokumen_user', $data);

        $add_year = ['year' => date('Y')];
        $this->db->insert('tbl_year', $add_year);

        $jen_dok = $data['jenis_dok'];
        $status = [$jen_dok => true, 'year' => date('Y')];
        $this->db->where('opd', $data['opd']);
        $this->db->update('tbl_status_dokumen', $status);

        return true;
    }

    //input pelaporan
    function tambah_pelaporan($data, $year)
    {

        $this->db->insert('tbl_dokumen_user', $data);

        if ($year) {
            # code...
        }
        $jen_dok = $data['jenis_dok'];
        $status = [$jen_dok => true, 'year' => date('Y')];
        $this->db->where('opd', $data['opd']);
        $this->db->update('tbl_status_dokumen', $status);

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

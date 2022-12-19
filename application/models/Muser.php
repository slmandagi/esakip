<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{

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

    function getAllData()
    {
        $this->db->select('*');
        $this->db->from('perencanaan_kinerja_admin');
        // $this->db->where('opd', 'minahasa');
        $this->db->join('tbl_pengukuran', 'tbl_pengukuran.opd = perencanaan_kinerja_admin.opd');
        // $this->db->join('tbl_pelaporan', 'tbl_pelaporan.opd = perencanaan_kinerja_admin.opd');

        $query = $this->db->get();
        return $query->result();
    }
}

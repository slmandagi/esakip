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
}

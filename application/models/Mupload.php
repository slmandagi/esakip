<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mupload extends CI_Model
{

    function input_data($data)
    {

        $this->db->insert('perencanaan_kinerja_admin', $data);

        return true;
    }

    function tambahLaporan($tabelLaporan)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_pelaporan', $tabelLaporan);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minformasi extends CI_Model
{

    function input_data($data)
    {

        $this->db->insert('tbl_informasi', $data);

        return true;
    }
}

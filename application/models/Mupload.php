<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mupload extends CI_Model
{

    function input_data($data)
    {

        $this->db->insert('perencanaan_kinerja_admin', $data);

        return true;
    }
}

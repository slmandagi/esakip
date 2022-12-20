<?php
defined('BASEPATH') or exit('No direct script access allowed');


class download extends CI_Controller
{

    function download($id)
    {
        $data = $this->db->get_where('tbl_dokumen_user', ['id' => $id])->row();
        force_download('uploads/' . $data->file_name, NULL);
    }
};

<?php
defined('BASEPATH') or exit('No direct script access allowed');


class download extends CI_Controller
{

    function download($id)
    {
        $data = $this->db->get_where('perencanaan_kinerja_admin', ['id' => $id])->row();
        force_download('uploads/' . $data->File_dok, NULL);
    }
};

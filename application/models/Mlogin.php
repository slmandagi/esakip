<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{

    function query_validasi_email($email)
    {
        $result = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email' LIMIT 1");
        return $result;
    }

    function query_validasi_password($email, $password)
    {
        $result = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email' AND user_password= '" . md5($password) . "' ");
        return $result;
    }
}   
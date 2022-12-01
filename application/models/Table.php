<?php

class Table extends CI_Model
{
    // for all table
    public function get_table($model, $limit = null, $start = null)
    {
        // $table_dashboard = file_get_contents('assets/json/table_dashboard.json');
        $this->load->database($model);
        $query = $this->db->get($model, $limit, $start);
        // $query = $this->db->query("SELECT * from `dashboard`");
        // $query = json_decode($query);
        // $query = $this->db->get();
        $query = $query->result_array();
        // $total_data = count($query);
        return $query;
    }

    public function total_data($model)
    {
        $this->load->database($model);
        $query = $this->db->get($model);
        $query = $query->result_array();
        $total_data = count($query);
        return $total_data;
    }
}

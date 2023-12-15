<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class ModelBiodata extends CI_Model
{
    public function simpanData($data)
    {
        $this->db->insert('biodata', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('biodata', $where);
    }
}

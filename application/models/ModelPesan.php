<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class ModelPesan extends CI_Model
{
    public function simpanData($data)
    {
        $this->db->insert('pesan', $data);
    }
}

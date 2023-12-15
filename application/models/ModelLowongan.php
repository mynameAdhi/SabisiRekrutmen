<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLowongan extends CI_Model

{
    public function getLowongan($where)
    {
        return $this->db->get_where('lowongan', $where);
    }

    public function search($keyword)
    {
        if (!$keyword) {
            return null;
        }
        $this->db->like('posisi', $keyword);
        $this->db->or_like('jenjang', $keyword);
        $query = $this->db->get($this->lowongan);
        return $query->result();
    }
}

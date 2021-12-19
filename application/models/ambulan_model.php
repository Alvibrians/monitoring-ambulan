<?php

class ambulan_model extends CI_Model{
    public function tampil_data($ambulan)
    {
        return $this->db->get($ambulan);
    }

    public function tambah_ambulan($data)
    {
        $this->db->insert('ambulan', $data);
    }
}
?>
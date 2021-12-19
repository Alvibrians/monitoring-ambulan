<?php

class dokter_model extends CI_Model{

    public function tampil_data($dokter)
    {
        return $this->db->get($dokter);
    }

    public function input_data($data)
    {
        $this->db->insert('dokter', $data);
    }

    public function ambil_data_dokter($kode_dokter)
    {
        $hasil = $this->db->where('kode_dokter',$kode_dokter)->get('dokter')
            ;
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function edit_data($where,$table)
    {
       return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>
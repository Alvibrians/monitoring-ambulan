<?php 

class pasien_model extends CI_Model{

    public function tampil_data($pasien)
    {
        return $this->db->get($pasien); 
    }

    public function ambil_data_pasien($idpasien)
    {
        $hasil = $this->db->where('id_pasien',$idpasien)->get('pasien')
            ;
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function get_data($table)
    {
        return $this->db->get($table); 
    }

    public function tpenyakit($id_pasien)
    {
         
        $this->db->select('*');
        $this->db->from('tipe_penyakit');
        $this->db->join('pasien', 'pasien.id_penyakit = tipe_penyakit.id_penyakit');
        return $hasil = $this->db->where('nik_pasien',$id_pasien)->get()
        ;
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
       
    }
}

?>
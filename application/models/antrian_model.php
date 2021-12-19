<?php

class antrian_model extends CI_Model{
    public function tampil_data()
    {
        //  return $this->db->get($pesan);
        // $this->db->query("SET @rank = 0;");
      //  $result = $this->db->query("SELECT * FROM `pesan` ORDER BY `pesan`.`status_ant` ASC " )->result();
       // return $result;
       $result = $this->db->query("SELECT * FROM `pesan` JOIN tipe_penyakit ON pesan.id_penyakit = tipe_penyakit.id_penyakit ORDER BY `pesan`.`status_ant` ASC " )->result();
        return $result;
    }

    public function antrian($id_pasien)
    {
      // $result = $this->db->query("SELECT * FROM `pesan` JOIN tipe_penyakit ON pesan.id_penyakit = tipe_penyakit.id_penyakit " )->result();
      //   return $result;
      $this->db->select('*');
      $this->db->from('tipe_penyakit');
      $this->db->join('pesan', 'pesan.id_penyakit = tipe_penyakit.id_penyakit');
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

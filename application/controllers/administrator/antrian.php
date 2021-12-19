<?php

class Antrian extends CI_Controller{
    public function index()
    {
        $data['pesan'] = $this->antrian_model->tampil_data();
        //$data['antri'] = $this->antrian_model->antrian();
        //$data['pesan'] = $this->db->query('SELECT * FROM `pesan` ORDER BY `pesan`.`status_ant` ASC')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/antrian',$data);
        $this->load->view('template_administrator/footer');

    }
}

?>
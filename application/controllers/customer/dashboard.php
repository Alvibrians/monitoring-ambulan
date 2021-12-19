<?php 

class Daftar extends CI_Controller{

    public function index()
    {
        $data['dokter'] = $this->dokter_model->tampil_data('dokter')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/dokter',$data);
        $this->load->view('template_administrator/footer');

    }
}
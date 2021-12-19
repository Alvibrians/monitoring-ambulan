<?php 

class Pasien extends CI_Controller{

    public function index()
    {
        $data['pasien'] = $this->pasien_model->tampil_data('pasien')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/pasien',$data);
        $this->load->view('template_administrator/footer');
    }
    
    public function detail($idpasien)
    {
        $this->load->model('pasien_model');
        $data ['detail'] = $this->pasien_model->tpenyakit($idpasien)->result();
        //var_dump($data);
        //$data['detail'] = $this->pasien_model->ambil_data_pasien($idpasien);
        //die;
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/pasien_detail',$data);
        $this->load->view('template_administrator/footer');
    }
}

?>
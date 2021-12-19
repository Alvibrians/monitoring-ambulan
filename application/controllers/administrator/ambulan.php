<?php

class Ambulan extends CI_Controller{
    public function index()
    {
        $data['ambulan'] = $this->ambulan_model->tampil_data('ambulan')->result();
        $data['tipe_ambulan'] = $this->ambulan_model->tampil_data('tipe_ambulan')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/ambulan',$data);
        $this->load->view('template_administrator/footer');

    }

    public function tambah_ambulan()
    {
        $data['ambulan'] = $this->ambulan_model->tampil_data('ambulan')->result();
        $data['tipe_ambulan'] = $this->ambulan_model->tampil_data('tipe_ambulan')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/ambulan_form',$data);
        $this->load->view('template_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_ambulan();
        }else{
                $macadd         = $this->input->post('macadd_amb');
                $kode_type      = $this->input->post('kode_tipeamb');
                $nopol          = $this->input->post('nopol_amb');
                $type           = $this->input->post('nama_tipeamb');
                $status         = $this->input->post('status_amb');
                $gambar         = $_FILES['gambar_amb']['name'];
                if($gambar=''){}else{
                    $config ['upload_path'] = './assets/upload';
                    $config ['allowed_types'] = 'jpg|jpeg|png';

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('gambar')){
                        echo "Gambar Ambulan Gagal diupload";
                    }else{
                        $gambar=$this->upload->data('file_name');
                    }
                }

                $data = array(
                    'macadd_amb'  =>  $macadd,
                    'kode_tipeamb'  =>  $kode_type,
                    'nopol_amb'  =>  $nopol,
                    'nama_tipeamb'  =>  $type,
                    'status_amb'  =>  $status,
                    'gambar_amb'  =>  $gambar,
                );

            $this->ambulan_model->tambah_ambulan($data,'ambulan');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">
                    Data Ambulan Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert"
                        aria-labels="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('administrator/ambulan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('macadd_amb','macadd_amb','required',['required' => 'Mac Address Wajib Diisi']);
        $this->form_validation->set_rules('kode_tipeamb','kode_tipeamb','required',['required' => 'Kode Tipe Wajib Diisi']);
        $this->form_validation->set_rules('nopol_amb','nopol_amb','required',['required' => 'Nomor Polisi Wajib Diisi']);
        $this->form_validation->set_rules('nama_tipeamb','nama_tipeamb','required',['required' => 'Tipe Ambulan Wajib Diisi']);
        $this->form_validation->set_rules('status_amb','status_amb','required',['required' => 'Status Dokter Wajib Diisi']);
        $this->form_validation->set_rules('gambar_amb','gambar_amb','required',['required' => 'Status Dokter Wajib Diisi']);
    }
}

?>
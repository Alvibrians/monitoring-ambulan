<?php 

class Dokter extends CI_Controller{

    public function index()
    {
        $data['dokter'] = $this->dokter_model->tampil_data('dokter')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/dokter',$data);
        $this->load->view('template_administrator/footer');

    }

    public function input()
    {
        $data = array(
            'id_dokter' => set_value('id_dokter'),
            'kode_dokter' => set_value('kode_dokter'),
            'nama_dokter' => set_value('nama_dokter'),
            'telp_dokter' => set_value('telp_dokter'),
            'alamat_dokter' => set_value('alamat_dokter'),
            'spesialis_dokter' => set_value('spesialis_dokter'),
        );
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/dokter_form',$data);
        $this->load->view('template_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->input();
        }else{
            $data = array(
                'kode_dokter' => $this->input->post('kode_dokter', TRUE),
                'nama_dokter' => $this->input->post('nama_dokter', TRUE),
                'telp_dokter' => $this->input->post('telp_dokter', TRUE),
                'alamat_dokter' => $this->input->post('alamat_dokter', TRUE),
                'spesialis_dokter' => $this->input->post('spesialis_dokter', TRUE),
            );

            $this->dokter_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">
                    Data Dokter Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert"
                        aria-labels="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('administrator/dokter');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_dokter','kode_dokter','required',['required' => 'Kode Dokter Wajib Diisi']);
        $this->form_validation->set_rules('nama_dokter','nama_dokter','required',['required' => 'Nama Dokter Wajib Diisi']);
        $this->form_validation->set_rules('telp_dokter','telp_dokter','required',['required' => 'Telepon Dokter Wajib Diisi']);
        $this->form_validation->set_rules('alamat_dokter','alamat_dokter','required',['required' => 'Alamat Dokter Wajib Diisi']);
        $this->form_validation->set_rules('spesialis_dokter','spesialis_dokter','required',['required' => 'Spesialis Dokter Wajib Diisi']);
    }

    public function detail($kode_dokter)
    {
        $data['detail'] = $this->dokter_model->ambil_data_dokter($kode_dokter);
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/dokter_detail',$data);
        $this->load->view('template_administrator/footer');
    }

    public function update($id)
    {
        $where = array('id_dokter' => $id);
        $data['dokter'] = $this->dokter_model->edit_data($where,'dokter')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/dokter_update',$data);
        $this->load->view('template_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_dokter');
        $kode_dokter = $this->input->post('kode_dokter');
        $nama_dokter = $this->input->post('nama_dokter');
        $telp_dokter = $this->input->post('telp_dokter');
        $alamat_dokter = $this->input->post('alamat_dokter');
        $spesialis_dokter = $this->input->post('spesialis_dokter');

        $data = array(
            'kode_dokter' => $kode_dokter,
            'nama_dokter' => $nama_dokter,
            'telp_dokter' => $telp_dokter,
            'alamat_dokter' => $alamat_dokter,
            'spesialis_dokter' => $spesialis_dokter
        );

        $where = array(
            'id_dokter' => $id
        );

        $this->dokter_model->update_data($where,$data,'dokter');
         $this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">
                    Data Dokter Berhasil Diperbarui!
                    <button type="button" class="close" data-dismiss="alert"
                        aria-labels="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('administrator/dokter');
    }

    public function delete($id)
    {
        $where = array('id_dokter' => $id);
        $this->dokter_model->hapus_data($where,'dokter');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">
                    Data Dokter Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert"
                        aria-labels="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('administrator/dokter');
    }
}

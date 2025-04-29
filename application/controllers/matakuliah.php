<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('matakuliah_model');
        $this->load->helper('url'); 
    }
    public function index() {
        $data['matakuliah'] = $this->matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['matakuliah'] = $this->matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/form_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $kode_matakuliah = $this->input->post('kode_matakuliah');
        $nama_matakuliah = $this->input->post('nama_matakuliah');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $jenis = $this->input->post('jenis');
        $prodi = $this->input->post('prodi');
        
        $data = array(
            'kode_matakuliah' => $kode_matakuliah,
            'nama_matakuliah' => $nama_matakuliah,
            'sks' => $sks,
            'semester' => $semester,
            'jenis' => $jenis,
            'prodi' => $prodi,
        );
    
        $result = $this->matakuliah_model->insert_matakuliah($data);
    
        if ($result) {
            $this->session->set_flashdata('success', 'matakuliah berhasil disimpan');
            redirect('matakuliah');
        } else {
            $this->session->set_flashdata('error', 'matakuliah gagal disimpan');
            redirect('matakuliah');
        }
    }
    
    public function hapus($kode_matakuliah){
        $this->matakuliah_model->delete_matakuliah($kode_matakuliah);
        redirect('matakuliah');
    }
    public function edit($kode_matakuliah) {
        $data['matakuliah'] = $this->matakuliah_model->get_matakuliah_by_kode($kode_matakuliah);
        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('templates/footer');
    }
    public function update($kode_matakuliah){
            $this->form_validation->set_rules('kode_matakuliah', 'Kode Matakuliah', 'required');
            $this->form_validation->set_rules('nama_matakuliah', 'Nama Matakuliah', 'required');
            $this->form_validation->set_rules('sks', 'Sks', 'required');
            $this->form_validation->set_rules('jenis', 'Jenis', 'required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        if ($this->form_validation->run() === FALSE) {
                $this->index($kode_matakuliah);
        } else {
            $data = [
                'kode_matakuliah' => $this->input->post('kode_matakuliah'),
                'nama_matakuliah' => $this->input->post('nama_matakuliah'),
                'sks' => $this->input->post('sks'),
                'jenis' => $this->input->post('jenis'),
                'prodi' => $this->input->post('prodi'),
            ];
            $this->Berita_model->update_matakuliah($kode, $data);
            redirect('matakuliah');
        }
    }
}

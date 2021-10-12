<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/kelas/index';

    $id_guru        = $this->session->id;      
    $data['kelas']  = $this->ModelKelas->getByIdGuru($id_guru);
    
		$this->load->view('admin/template', $data);
	}

  public function create()
  {
    $data['konten'] = 'admin/kelas/create';

    $id_guru        = $this->session->id;      
    $data['kelas']  = $this->ModelKelas->getByIdGuru($id_guru);
    
		$this->load->view('admin/template', $data);
  }

  public function store()
  {
    $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
    $this->form_validation->set_rules('tingkat_kelas', 'Tingkat Kelas', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $nama_kelas     = $this->input->post('nama_kelas');
      $tingkat_kelas  = $this->input->post('tingkat_kelas');
      
      $this->ModelKelas->store($nama_kelas, $tingkat_kelas);

      $this->session->set_flashdata('sukses', 'Berhasil tambah kelas');

      redirect('admin/kelas');
    } else {
      $this->session->set_flashdata('error', validation_errors());

      redirect($_SERVER['HTTP_REFERER']);
    }
  }
}

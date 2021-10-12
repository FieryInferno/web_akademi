<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/materi/index';

    $id_kelas       = $this->input->get('id');
    $data['kelas']  = $this->ModelKelas->getByIdKelas($id_kelas);

		$this->load->view('admin/template', $data);
	}

  public function create()
  {
    $data['konten'] = 'admin/materi/create';

    $id_guru        = $this->session->id;      
    $data['kelas']  = $this->ModelKelas->getByIdGuru($id_guru);
    
		$this->load->view('admin/template', $data);
  }

  public function store()
  {
    $this->form_validation->set_rules('judul_materi', 'Judul Materi', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('tingkat', 'Tingkat', 'required');
    $this->form_validation->set_rules('isi_materi', 'Isi Materi', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $judul_materi = $this->input->post('judul_materi');
      $keterangan   = $this->input->post('keterangan');
      $kelas        = $this->input->post('kelas');
      $tingkat      = $this->input->post('tingkat');
      $isi_materi   = $this->input->post('isi_materi');
      $file         = $this->uploadFile();
      
      $this->ModelMateri->store($judul_materi, $keterangan, $kelas, $tingkat, $isi_materi, $file);

      $this->session->set_flashdata('sukses', 'Berhasil tambah materi');
    } else {
      $this->session->set_flashdata('error', validation_errors());
    }

    redirect($_SERVER['HTTP_REFERER']);
  }

  public function uploadFile()
  {
    $config['upload_path']    = './asset/';
    $config['allowed_types']  = 'pdf';

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('file')) {
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect($_SERVER['HTTP_REFERER']);
    } else {
      return $this->upload->file_name;
    }
  }
}

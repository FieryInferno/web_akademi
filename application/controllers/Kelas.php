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

  public function siswa()
  {
    $data['konten']   = 'siswa/kelas/index';
    $data['dasar']    = $this->ModelKelas->getByTingkat('dasar');
    $data['lanjutan'] = $this->ModelKelas->getByTingkat('lanjutan');
    
		$this->load->view('siswa/template', $data);
  }

  public function showSiswa($id_kelas)
  {
    $kelas_siswa  = $this->db->get_where('kelas_siswa', [
      'siswa_id'  => $this->session->id,
      'kelas_id'  => $id_kelas
    ])->num_rows();

    if ($kelas_siswa <= 0) {
      $this->db->insert('kelas_siswa', [
        'siswa_id'  => $this->session->id,
        'kelas_id'  => $id_kelas
      ]);
    }
    
    if ($this->input->get()) {
      $id_siswa = $this->session->id;
      $progress = $this->db->get_where('progress_siswa', [
        'siswa_id'  => $id_siswa,
        'materi_id' => $this->input->get('id')
      ])->row_array();

      if (!$progress) {
        $this->ModelProgress->store($id_siswa, $this->input->get('id'));
      }
    }

    $data['konten'] = 'siswa/kelas/tampil';
    $data['materi'] = $this->ModelMateri->getByIdKelas($id_kelas);
    $data['kelas']  = $this->ModelKelas->getByIdKelas($id_kelas);

		$this->load->view('siswa/template', $data);
  }
}

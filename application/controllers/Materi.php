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

  public function show($id_kelas, $id_materi)
  {
    if ($this->input->get()) {
      $id_siswa = $this->session->id;
      $progress = $this->db->get_where('progress_siswa', [
        'siswa_id'  => $id_siswa,
        'materi_id' => $this->input->get('id')
      ])->row_array();

      if ($progress == NULL) {
        $this->ModelProgress->store($id_siswa, $this->input->get('id'));
      }
    }

    $data   = $this->ModelMateri->getByIdMateri($id_materi);
    $materi = $this->db->get_where('materi', ['kelas_id' => $id_kelas])->result_array();
    $next   = array_search($id_materi, array_column($materi, 'id')) + 1;
    if ($next == count($materi)) {
      $data['next'] = NULL;
    } else {
      $data['next'] = $materi[$next]['id'];
    }
    
    $data['id_kelas'] = $id_kelas;
    $data['konten']   = 'siswa/materi/index';
    
		$this->load->view('siswa/template', $data);
  }
}

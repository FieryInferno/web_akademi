<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {

	public function index()
	{
    if ($this->input->get()) {
      $data = $this->ModelKelas->getByIdKelas($this->input->get('kelas'));
    }

    $id_siswa     = $this->session->id;
    $kelas_siswa  = $this->ModelKelas->getByIdSiswa($id_siswa);

    for ($i=0; $i < count($kelas_siswa); $i++) {
      $key      = $kelas_siswa[$i];
      $materi   = $this->ModelMateri->getByIdKelas($key['kelas_id']);
      $progress = $this->ModelProgress->getByKelasSiswa($key['kelas_id'], $id_siswa);
      
      if (count($materi) == count($progress)) {
        $data['kelas'][$i]  = $key;
      }
    }

    $data['konten'] = 'siswa/sertifikat/index';
    
		$this->load->view('siswa/template', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'siswa/index';
    
    $id_siswa       = $this->session->id;
    $data['kelas']  = $this->ModelKelas->getByIdSiswa($id_siswa);
    
		$this->load->view('siswa/template', $data);
	}
}

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
}

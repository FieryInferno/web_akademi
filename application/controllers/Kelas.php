<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/kelas';

    $id_guru        = $this->session->id;      
    $data['kelas']  = $this->ModelKelas->getByIdGuru($id_guru);
    
		$this->load->view('admin/template', $data);
	}
}

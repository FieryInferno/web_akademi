<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProgress extends CI_Model {
  
  public function store($id_siswa, $id_materi)
  {
    $this->db->insert('progress_siswa', [
      'siswa_id'  => $id_siswa,
      'materi_id' => $id_materi,
      'created_at'    => date('Y-m-d h:i:s')
    ]);
  }
}

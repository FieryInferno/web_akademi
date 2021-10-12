<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMateri extends CI_Model {
  
  public function store($judul_materi, $keterangan, $kelas, $tingkat, $isi_materi, $file)
  {
    $this->db->insert('materi', [
      'judul_materi'  => $judul_materi,
      'keterangan'    => $keterangan,
      'kelas_id'      => $kelas,
      'isi_materi'    => $isi_materi,
      'tingkat'       => $tingkat,
      'file'          => $file,
      'created_at'    => date('Y-m-d h:i:s')
    ]);
  }
}

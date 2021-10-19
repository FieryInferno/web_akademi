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

  public function getByKelasSiswa($id_kelas, $id_siswa)
  {
    $this->db->join('materi', 'progress_siswa.materi_id = materi.id');
    return $this->db->get_where('progress_siswa', [
      'siswa_id'        => $id_siswa,
      'materi.kelas_id' => $id_kelas     
    ])->result_array();
  }
}

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

  public function getByIdKelas($id_kelas)
  {
    $this->db->join('kelas', 'materi.kelas_id = kelas.id');
    return $this->db->get_where('materi', ['kelas_id' => $id_kelas])->result_array();
  }

  public function getByIdMateri($id_materi)
  {
    return $this->db->get_where('materi', ['id' => $id_materi])->row_array();
  }
}

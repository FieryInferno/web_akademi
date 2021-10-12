<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKelas extends CI_Model {

  public function getByIdGuru($id_guru)
  {
    $data = $this->db->get_where('kelas', ['guru_id' => $id_guru])->result_array();

    for ($i=0; $i < count($data); $i++) {
      $key    = $data[$i];
      $materi = $this->db->get_where('materi', [
        'kelas_id'    => $key['id'],
        'keterangan'  => 'materi'
      ])->result_array();
      
      $quiz = $this->db->get_where('materi', [
        'kelas_id'    => $key['id'],
        'keterangan'  => 'quiz'
      ])->result_array();
      
      $peserta  = $this->db->get_where('kelas_siswa', ['kelas_id' => $key['id']])->result_array();
      
      $data[$i]['jumlah_materi']  = count($materi);
      $data[$i]['jumlah_quiz']    = count($quiz);
      $data[$i]['jumlah_peserta'] = count($peserta);
    }

    return $data;
  }
}

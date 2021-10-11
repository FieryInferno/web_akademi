<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {

  public function store($nama, $email, $password)
  {
    $this->db->insert('user', [
      'nama'        => $nama,
      'email'       => $email,
      'password'    => password_hash($password, PASSWORD_DEFAULT),
      'level'       => 'siswa',
      'created_at'  => date('Y-m-d h:i:s')
    ]);
  }
}

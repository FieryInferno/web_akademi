<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  
	public function register()
	{
		$this->load->view('register');
	}

  public function store()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $nama     = $this->input->post('nama');
      $email    = $this->input->post('email');
      $password = $this->input->post('password');
      
      $this->ModelUser->store($nama, $email, $password);

      $this->session->set_flashdata('sukses', 'Berhasil daftar');

      redirect('login');
    } else {
      $this->session->set_flashdata('error', validation_errors());

      redirect('register');
    }
  }

  public function login()
  {
    $this->load->view('login');
  }

  public function authenticate()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');
      
      $data = $this->ModelUser->getByEmail($email);

      if ($data) {
        if (password_verify($password, $data['password'])) {
          $this->session->set_flashdata([
            'id'  => $data['id']
          ]);

          switch ($data['level']) {
            case 'admin':
              redirect('admin');
              break;

            case 'siswa':
              redirect('siswa');
              break;
            
            default:
              # code...
              break;
          }
        } else {
          $this->session->set_flashdata('error', 'Password salah');
        }
      } else {
        $this->session->set_flashdata('error', 'Email salah');
      }
    } else {
      $this->session->set_flashdata('error', validation_errors());
    }
    redirect('login');
  }
}
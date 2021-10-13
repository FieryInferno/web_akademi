<?php
  function isLogin()
  {
    $CI =& get_instance();
    switch ($CI->session->level) {
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
  }
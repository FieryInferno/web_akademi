<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['register']['get']   = 'User/register';
$route['login']['get']      = 'User/login';
$route['register']['post']  = 'User/store';
$route['login']['post']     = 'User/authenticate';

$route['admin'] = 'Admin';

$route['admin/kelas']                 = 'Kelas';
$route['admin/kelas/materi']          = 'Materi';
$route['admin/kelas/tambah']['get']   = 'Kelas/create';
$route['admin/kelas/tambah']['post']  = 'Kelas/store';

$route['admin/materi']['get']   = 'Materi/create';
$route['admin/materi']['post']  = 'Materi/store';

$route['logout']  = 'User/logout';
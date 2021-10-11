<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['register']['get']   = 'User/register';
$route['login']['get']      = 'User/login';
$route['register']['post']  = 'User/store';
$route['login']['post']     = 'User/authenticate';
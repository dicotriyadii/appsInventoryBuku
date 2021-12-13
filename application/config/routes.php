<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['login']              = 'Clogin';
$route['dashboard']          = 'CPage';

// proses 
$route['prosesLogin']  = 'Clogin/prosesLogin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

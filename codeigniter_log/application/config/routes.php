<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/create']='posts/create';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts']='posts/index';

$route['idates/create'] ='idates/create';
$route['idates'] = 'idates/index';
$route['idates/posts/(:any)'] = 'idates/posts/$1';

$route['goals'] = 'goals/index';
$route['goals/create'] ='goals/create';
$route['goals/posts/(:any)'] = 'goals/posts/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

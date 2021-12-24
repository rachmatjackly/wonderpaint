<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['registrasi'] = 'authentication/register';
$route['login'] = 'authentication/login';
$route['logout'] = 'authentication/logout';
$route['verification/(:any)'] = 'authentication/verification/$1';

$route['penjualan'] = 'penjualan/index';
$route['penjualan/edit'] = 'penjualan/edit';
$route['penjualan/delete/(:any)'] = 'penjualan/delete_data/$1';

$route['pelanggan'] = 'pelanggan/index';
$route['pelanggan/edit'] = 'pelanggan/edit';
$route['pelanggan/delete/(:num)'] = 'pelanggan/delete_data/$1';

$route['distributor'] = 'distributor/index';
$route['distributor/edit'] = 'distributor/edit';
$route['distributor/delete/(:num)'] = 'distributor/delete_data/$1';

$route['persediaan'] = 'persediaan/index';
$route['persediaan/edit'] = 'persediaan/edit';
$route['persediaan/delete/(:num)'] = 'persediaan/delete_data/$1';
$route['persediaan/datamasuk'] = 'persediaan/data_masuk';
$route['persediaan/datamasuk/edit'] = 'persediaan/edit_masuk';
$route['persediaan/datamasuk/delete/(:num)'] = 'persediaan/delete_data_masuk/$1';
$route['persediaan/datakeluar'] = 'persediaan/data_keluar';
$route['persediaan/datakeluar/edit'] = 'persediaan/edit_keluar';
$route['persediaan/datakeluar/delete/(:num)'] = 'persediaan/delete_data_keluar/$1';
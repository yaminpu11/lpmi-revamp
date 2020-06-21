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
$route['default_controller'] = 'c_dashboard';
$route['404_override'] = 'c_dashboard/page_404';
$route['translate_uri_dashes'] = FALSE;
// $route['admin'] = 'admin/overview';
// Sambutan
$route['greetings'] = 'c_dashboard/sambutan';
// Visi Misi
$route['vision-mission'] = 'c_dashboard/vision_mision';
// Structure
$route['organizational-structure'] = 'c_dashboard/structure';
// Dosen
$route['committee'] = 'c_dashboard/committee';
//Fasilitas
$route['target-program'] = 'c_dashboard/target_program';
//Artikel
$route['news'] = 'c_dashboard/news';
$route['news/(:num)'] = 'c_dashboard/details_news/$1';
$route['news/(:num)/(:any)'] = 'c_dashboard/details_news/$1/$2';
$route['event/(:num)'] = 'c_dashboard/details_news/$1';
//Agenda
$route['event'] = 'c_dashboard/event';
//Mahasiswa
$route['knowledge'] = 'c_dashboard/knowledge';
$route['knowledge/(:num)'] = 'c_dashboard/knowledge/$1';
//Gallery
$route['accredition'] = 'c_dashboard/acreditas';
//Penelitian
$route['gallery'] = 'c_dashboard/gallery';


$route['prospective-student'] = 'c_dashboard/prospective';
$route['__getLanguagelabels'] = 'c_dashboard/getLanguagelabels';

// ==== API LPMI yamin=== //
$route['api-lpmi/__getContentLPMI'] = 'api/c_api_lpmi/GetDataContent';


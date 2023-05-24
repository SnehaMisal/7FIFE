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
$route['default_controller'] = 'PageController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'PageController/index';
// Link File
$route['links'] = 'PageController/links';
$route['script'] = 'PageController/script';

$route['dashboard'] = 'PageController/dashboard';
$route['forgot_password'] = 'PageController/forgot_password';
$route['admin_profile'] = 'PageController/admin_profile';
$route['user_management'] = 'PageController/user_management';

$route['privacy_policy'] = 'PageController/privacy_policy';
$route['term_condition'] = 'PageController/term_condition';
$route['push_notification'] = 'PageController/push_notification';
$route['notification'] = 'PageController/notification';
$route['revenue_management'] = 'PageController/revenue_management';
$route['subscription_plan'] = 'PageController/subscription_plan';
$route['review_managment'] = 'PageController/review_managment';
$route['user_report'] = 'PageController/user_report';
$route['reward_management'] = 'PageController/reward_management';
// Setting
// $route['add_language'] = 'PageController/add_language';
// $route['create_categories'] = 'PageController/create_categories';
// $route['create_subcategories'] = 'PageController/create_subcategories';
// $route['create_album'] = 'PageController/create_album';
// $route['add_artist'] = 'PageController/add_artist';

// Manage Songs
// $route['import_song'] = 'PageController/import_song';
// $route['song_list'] = 'PageController/song_list';
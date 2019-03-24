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
$route['default_controller'] = 'home';
$route['index'] = 'home/index';
$route['contact'] = 'home/contact';
$route['our_approach'] = 'home/our_approach';
$route['vision_and_values'] = 'home/vision_and_values';
$route['our_commitment'] = 'home/our_commitment';
$route['our_team'] = 'home/our_team';
$route['our_approach_clients'] = 'home/our_approach_clients';
$route['our_specialisations'] = 'home/our_specialisations';
$route['promote_your_business'] = 'home/promote_your_business';
$route['submit_job_vacancy'] = 'home/submit_job_vacancy';
$route['our_approach_candidates'] = 'home/our_approach_candidates';
$route['tips_and_advise'] = 'home/tips_and_advise';
$route['frequently_asked_questions'] = 'home/frequently_asked_questions';
$route['submit_resume'] = 'home/submit_resume';
$route['job_search_advisor'] = 'home/job_search_advisor';
$route['global_candidate_search'] = 'home/global_candidate_search';
$route['global_immigration_services'] = 'home/global_immigration_services';
$route['global_partnership_opportunities'] = 'home/global_partnership_opportunities';
$route['global_offices'] = 'home/global_offices';
$route['local_offices'] = 'home/local_offices';
$route['global_offices'] = 'home/global_offices';
$route['global_partnership_opportunities'] = 'home/global_partnership_opportunities';
$route['about'] = 'home/about';
$route['corporate_migration'] = 'home/corporate_migration';
$route['candidate_search'] = 'home/candidate_search';
$route['mining_skilled_workers'] = 'home/mining_skilled_workers';
$route['powerplant_skilled_workers'] = 'home/powerplant_skilled_workers';
$route['building_skilled_workers'] = 'home/building_skilled_workers';
$route['civil_skilled_workers'] = 'home/civil_skilled_workers';
$route['construction_skilled_workers'] = 'home/construction_skilled_workers';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

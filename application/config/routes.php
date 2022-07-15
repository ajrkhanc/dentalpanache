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
$route['default_controller'] = 'welcome';
$route['dental-tourism'] = 'welcome/dental_tourism';

/* Services */
$route['teeth-whitening-in-gurgaon'] = 'welcome/Teeth_whitening';
$route['porcelain-veneers'] = 'welcome/Porcelain_veneers';
$route['dental-implants-in-gurgaon'] = 'welcome/Dental_implants';
$route['best-root-canal-treatment-in-gurgaon'] = 'welcome/Root_canal_treatment';
$route['dental-crowns-bridges'] = 'welcome/Dental_crowns_bridges';
$route['invisible-braces-aligners-in-gurgaon'] = 'welcome/Invisible_braces_aligners';
$route['kids-dentist-in-gurgaon'] = 'welcome/Kids_dentist';
$route['tooth-extraction-in-gurgaon'] = 'welcome/Tooth_Extraction';
$route['dental-emergency-dentist-in-gurgaon'] = 'welcome/Dental_Emergency';
$route['consent-form'] = 'welcome/Covid19_consent_form';

/* Gallery Pages */
$route['educational-videos'] = 'welcome/Educational_videos';
$route['video-testimonials'] = 'welcome/Video_Testimonials';
$route['gallery'] = 'welcome/Gallery';

$route['faqs'] = 'welcome/Faqs';
$route['about-us'] = 'welcome/About_us';
$route['clinic-tour'] = 'welcome/Clinic_Tour';
$route['contact-us'] = 'welcome/Contact_US';



$route['thank-you'] = 'welcome/thank_you';

$route['blog'] = 'welcome/blog';
$route['category/(:any)'] = 'welcome/category/$1';
$route['(:any)'] = 'welcome/blogslug/$1';
$route['404_override'] = 'welcome/notfound';
$route['translate_uri_dashes'] = FALSE;

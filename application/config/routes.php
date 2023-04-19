<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';
$route["mission-and-vision"]="about/mission-and-vision";
$route["why-choose-us"]="about/why-choose-us";
$route["iba-approved-packers-in-(:any)"]="about/iba-approved-packers/$1";
$route["iba-approved-transporter-in-(:any)"]="about/iba-approved-transporters/$1";
$route["faq"]="about/faq";
$route["franchise"]="about/franchise";
$route["awards-and-acheivements"]="about/awards-and-acheivements";
$route["testimonials"]="about/testimonials";
$route["frontend-in-(:any)"]="services/frontend/$1";
$route["warehousing-in-(:any)"]="services/warehousing/$1";
$route["backend-in-(:any)"]="services/backend/$1";
$route["web-design-in-(:any)"]="services/web_design/$1";
$route["ui-ux-in-(:any)"]="services/ui_ux/$1";
$route["software-in-(:any)"]="services/software/$1";
$route["(:any)-packing-unpacking"]="services/packing/$1";
$route["(:any)-warehouse"]="services/warehouse/$1";
$route["graphic-design-in-(:any)"]="services/graphic";
$route['indian-states-packers-and-movers']='packers_movers';
$route["packers-movers/(:any)"]="home/error";
$route["branches"]="packers_movers/state_services/india";
$route["(:any).htm"]="home/error";
$route["(:any)-packers-movers"]="packers-movers/city/$1";


$route['translate_uri_dashes'] = TRUE;
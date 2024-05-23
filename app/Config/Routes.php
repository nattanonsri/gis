<?php

use App\Controllers\Member;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('member', 'Member::index');

$routes->match(['get', 'post'], 'member/create', 'Member::create');

$routes->match(['get', 'post'],'member/edit/(:num)', 'Member::edit/$1');

$routes->match(['get'], 'member/delete/(:num)', 'Member::delete/$1');


$routes->get('profile', 'Profile_HomeControllter::index');

$routes->match(['get', 'post'], 'profile/create' , 'Profile_HomeControllter::create');

$routes->match(['get', 'post'], 'profile/edit/(:num)', 'Profile_HomeControllter::edit/$1');

$routes->match(['get'], 'profile/delete/(:num)','Profile_HomeControllter::delete/$1');

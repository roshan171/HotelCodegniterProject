<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user', 'User::index');
$routes->get('/menu', 'User::menus');
$routes->get('/about', 'User::aboutus');

$routes->get('/reservation', 'User::reservation');
$routes->post('/add-reservation', 'User::reservationstore');

$routes->get('/contact', 'User::contact');
$routes->post('/add-contact', 'User::contactstore');



// themes setup
// $routes->get('/login', 'Admin::index');
// $routes->get('/register', 'Admin::register');
// $routes->get('/logout', 'Admin::logout');

// employee
$routes->get('/dashboard', 'Admin::dashboard');

$routes->get('/employee', 'Admin::employee');
$routes->get('/create-employee', 'Admin::create');
$routes->post('/add-employee', 'Admin::store');
$routes->get('/edit-employee/(:num)', 'Admin::edit/$1');
$routes->put('/update-employee/(:num)', 'Admin::update/$1');
$routes->get('/delete-employee/(:num)', 'Admin::delete/$1');



$routes->get('/admin-reservation', 'Admin::reservation');
$routes->get('/edit-reserve/(:num)', 'Admin::reservationedit/$1');
$routes->put('/update-reserve/(:num)', 'Admin::reservationupdate/$1');
$routes->get('/delete-reserve/(:num)', 'Admin::reservationdelete/$1');

$routes->get('/admin-contact', 'Admin::contact');
$routes->get('/edit-contact/(:num)', 'Admin::contactedit/$1');
$routes->put('/update-contact/(:num)', 'Admin::contactupdate/$1');
$routes->get('/delete-contact/(:num)', 'Admin::contactdelete/$1');


// food

$routes->get('food', 'Food::index');
$routes->get('food/create', 'Food::create');
$routes->post('food/store', 'Food::store');
$routes->get('food/edit/(:num)', 'Food::edit/$1');
$routes->put('food/update/(:num)', 'Food::update/$1');
$routes->get('food/delete/(:num)', 'Food::delete/$1');

// app/Config/Routes.php

$routes->get('reservations', 'Reservation::index');
$routes->get('reservations/create', 'Reservation::create');
$routes->post('reservations/store', 'Reservation::store');
$routes->get('reservations/edit/(:num)', 'Reservation::edit/$1');
$routes->put('reservations/update/(:num)', 'Reservation::update/$1');
$routes->get('reservations/delete/(:num)', 'Reservation::delete/$1');



// app/Config/Routes.php

$routes->get('register', 'Register::index');
$routes->post('register/save', 'Register::save');
$routes->get('login', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');
$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/logout', 'Logout::index');







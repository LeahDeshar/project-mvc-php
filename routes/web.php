<?php

use App\Controllers\PageController;
/** @var $router \App\Router\Router */


$router->get('/', PageController::class . '@index');
$router->get('/contact', PageController::class . '@contact');
$router->post('/contact', PageController::class . '@contactPost');
<<<<<<< HEAD
// $router->post('/contact', PageController::class . '@contactPost');

//$router->get('/features', PageController::class . '@features');
//$router->get('/about', PageController::class . '@about');
//$router->post('/contact', PageController::class . '@saveContact');
=======
$router->get('/contact/list', PageController::class . '@contactList');
$router->get('/contact/view', PageController::class . '@contactView');
>>>>>>> a86518a52b211bf34c5809feda14cc27709c687c

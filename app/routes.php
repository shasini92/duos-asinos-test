<?php

$router->get('/', 'PagesController@home');
$router->get('/login', 'PagesController@login');
$router->get('/register', 'PagesController@register');
$router->get('/results', 'PagesController@results');
$router->post('/results', 'PagesController@searchUsers');

$router->post('/register', 'UsersController@store');
$router->post('/login', 'UsersController@login');
$router->get('/logout', 'UsersController@logout');

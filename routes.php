<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');
$router->get('/book', 'BookController@all');

$router->get('/book/edit/(\d+)', 'BookController@edit');
$router->post('/book/edit/(\d+)', 'BookController@edit');


$router->get('/api/get_book', 'BookController@get_book');

$router->get('/hello', 
    function() { 
        echo 'hi'; 
    } 
);
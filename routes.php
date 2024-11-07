<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');
$router->get('/book', 'BookController@all');


$router->get('/author', 'AuthorController@all');
$router->get('/author/edit/(\d+)', 'AuthorController@edit');
$router->post('/author/edit/(\d+)', 'AuthorController@edit');


$router->get('/book/edit/(\d+)', 'BookController@edit');
$router->post('/book/edit/(\d+)', 'BookController@edit');
$router->get('/book/delete/(\d+)', 'BookController@delete');


$router->get('/api/get_book', 'BookController@get_book');

$router->get('/hello', 
    function() { 
        echo 'hi'; 
    } 
);
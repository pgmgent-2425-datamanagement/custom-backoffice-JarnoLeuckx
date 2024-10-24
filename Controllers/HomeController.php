<?php
namespace App\Controllers;



class HomeController extends BaseController {

    public static function index () {
        
        //print_r($books);

        self::loadView('/home', [
            'title' => 'Homepage',
            
        ]);
}
}
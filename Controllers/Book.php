<?php

namespace App\controllers;
use App\Models\Book;

class BookController extends BaseController{
    public static function index(){
        $books = Book::all();
        //print_r($books);

        self::loadView('/home',[
            'title' => 'Homepage',
            'books' =>'$books'
        ]);
        
        
    }
    public static function edit (){

    }
}

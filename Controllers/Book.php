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
    public static function edit ($id){
        $books=Book::find($id);
        if (isset($_POST['title'])){
            $books->title=$_POST['title'];
            $books->publ_year=$_POST['publ_year'];
            $books->save();
            
        }
        self::loadView('./books/edit',[
            'title' => 'Edit book',
            'books' => $books
        ]);

    }
    public static function get_book(){
        $books=Book::all();
        header("Content-type:application/json");
        echo json_encode($books);

        exit;
    }
   
}



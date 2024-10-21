<?php

namespace App\Controllers;

use App\Models\Book;

class BookController extends BaseController {

    public static function index () {
        $books = Book::all();

        //print_r($books);

        self::loadView('/home', [
            'title' => 'Homepage',
            'books' => $books
        ]);

    }
    public static function edit( $id ) {
        $books = Book::find($id);

        if(isset($_POST['title'])) {
            //formulier is gesubmit
            $books->title = $_POST['tile'];
            
            $books->save();
            
        }
}
}
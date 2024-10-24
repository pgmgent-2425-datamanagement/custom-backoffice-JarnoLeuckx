<?php

namespace App\Controllers;

use App\Models\Book;

class BookController extends BaseController {

   
    
    public static function edit( $id ) {
        $book = Book::find($id);

        if(isset($_POST['title'])) {
            //formulier is gesubmit
            $book->title = $_POST['title'];
            
            $book->save();
            
        }
        self::loadView('books/edit', [
            'title' => 'Book',
            'book' => $book
        ]);

}
public static function all () {
    $books = Book::all();
    //print_r($books);

    self::loadView('/book', [
        'title' => 'Book',
        'books' => $books
        
    ]);
}

}

<?php

namespace App\Controllers;

use Book;

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
public static function delete($id){
    $book = Book::deleteById($id);
    
   header(
         'Location: /book'
   );
         
   
}
}


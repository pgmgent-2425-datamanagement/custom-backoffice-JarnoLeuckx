<?php

namespace App\Controllers;

use App\Models\Book;

class BookController extends BaseController
{
    public static function edit($id)
    {
        $book = Book::find($id);

        if (isset($_POST['title'])) {
            // Formulier is gesubmit
            $book->title = $_POST['title'];
            $book->save();

            // Na opslaan kan je eventueel redirecten of een succesbericht tonen
            header('Location: /book');
            exit;
        }

        self::loadView('books/edit', [
            'title' => 'Edit Book',
            'book' => $book
        ]);
    }

    public static function all()
    {
        $books = Book::all();

        self::loadView('book', [  // aanname: view in views/book/index.php
            'title' => 'Books',
            'books' => $books
        ]);
    }

    public static function delete($id)
    {
        Book::deleteById($id);

        header('Location: /book');
        exit;
    }
}

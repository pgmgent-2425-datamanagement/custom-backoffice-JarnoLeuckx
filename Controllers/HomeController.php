<?php
namespace App\Controllers;

use Book;
use Author;

class HomeController extends BaseController {

    public static function index () {
        $item = new Author();
        $booksByAuthor = $item->getBooksByAuthor();


        self::loadView('/home', [
            'title' => 'Homepage',
            'booksByAuthor' => $booksByAuthor
            
        ]);
}
}
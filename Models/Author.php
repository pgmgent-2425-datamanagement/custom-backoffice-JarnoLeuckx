<?php

use App\Models\BaseModel;

class Author extends BaseModel {

  
    public function save() {

        $sql = "UPDATE author SET first_name = :first_name , last_name = :last_name, :email =email WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':first_name' => $this->first_name,
            ':last_name' => $this->last_name,
            ':email' => $this->email,
            ':id' => $this->id,
        ]);
    }

    public function getBooksByAuthor(){
        global $db;
        $sql = "
        SELECT 
            authors.first_name,
            authors.last_name,
            COUNT(books.id) AS book_count
        FROM 
            authors
        LEFT JOIN 
            author_book ON authors.id = author_book.idauthor
        LEFT JOIN 
            books ON  books.id = author_book.idbooks
        GROUP BY 
            authors.first_name
    ";

    // Query uitvoeren en resultaten ophalen
    $stmt = $this->db->prepare($sql);
    $stmt->execute();

    // Resultaten weergeven
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
   return self::castToModel($data);


    }
}
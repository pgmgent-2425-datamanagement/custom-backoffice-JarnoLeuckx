<?php

namespace App\Models;

use App\Models\BaseModel;

class Book extends BaseModel
{
    public $id;
    public $title;
    public $author_id;
    public $published_year;

    // Update bestaande boek
    public function save()
    {
        $sql = "UPDATE books SET title = :title WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        return $pdo_statement->execute([
            ':title' => $this->title,
            ':id' => $this->id,
        ]);
    }

    // Vind een boek op id
    public static function find($id)
    {
        $instance = new self();
        $stmt = $instance->db->prepare("SELECT * FROM books WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    // Haal alle boeken op
    public static function all()
    {
        $instance = new self();
        $stmt = $instance->db->query("SELECT * FROM books ORDER BY title ASC");
        return $stmt->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    // Verwijder boek op id
    public static function deleteById($id)
    {
        $instance = new self();
        $stmt = $instance->db->prepare("DELETE FROM books WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}

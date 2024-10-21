<?php

namespace App\Models;

use App\Models\BaseModel;

class Book extends BaseModel {

  
    public function save() {

        $sql = "UPDATE books SET name = :name, title = :title WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':title' => $this->title,
            
            ':id' => $this->id,
        ]);
    }
}
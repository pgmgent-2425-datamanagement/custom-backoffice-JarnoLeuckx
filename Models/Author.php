<?php

namespace App\Models;

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
}
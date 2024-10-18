<?php
namespace App\Models;
use App\Models\BaseModel;
class Book extends BaseModel{
    public function save(){

    $sql= "UPDATE books SET title=:title, publ_year =:publ_year WHERE id=:id";

    $pdo_statement = $this->db->prepare($sql);
    $pdo_statement->execute([
        ':title' => $this->title,
        ':publ_year' => $this->publ_year,
        ':id' => $this->id
    ]);
}
}

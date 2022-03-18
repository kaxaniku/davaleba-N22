<?php

namespace Models;

class CategoriesModel extends Database {

    public function getCategories() {
        $stm = $this->connection->query('SELECT * FROM categories');
        $stm->execute();
        return $stm->fetchAll();
    }
    
}
<?php

namespace Models;

class HomeModel extends Database {

    public function getHomeCategories() {
        $stm = $this->connection->query('SELECT * FROM categories WHERE home = 1');
        $stm->execute();
        return $stm->fetchAll();
    }
    public function GET_ALL_MAIN(){
        $stm = $this->connection->query('SELECT * FROM news ORDER BY ID DESC LIMIT 3');
        $stm->execute();
        return $stm->fetchAll();
    }
}
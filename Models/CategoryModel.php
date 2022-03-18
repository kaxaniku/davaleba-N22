<?php
namespace Models;

class CategoryModel extends Database {
    public function GET_ALL(){
        $stm = $this->connection->query('SELECT * FROM categories');
        $stm->execute();
        return $stm->fetchAll();
    }
    public function GET_SINGLE($id){
        $stm = $this->connection->prepare('SELECT * FROM categories WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->execute();
        return $stm->fetch();
    }

    public function UPDATE($id, $title, $home) {
        $stm = $this->connection->prepare('UPDATE categories
                                              SET title = :title,
                                                  home = :home
                                            WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->bindParam('title', $title);
        $stm->bindParam('home', $home);

        $stm->execute();
    }

    public function INSERT($title, $home) {
        $stm = $this->connection->prepare('INSERT INTO categories (title, home) 
                                                VALUES (:title, :home)');
        $stm->bindParam('title', $title);
        $stm->bindParam('home', $home);

        $stm->execute();
    }

    public function ERASURE($id) {
        $stm = $this->connection->prepare('DELETE FROM categories WHERE id = :id');
        $stm->bindParam('id', $id);

        $stm->execute();
    }
}
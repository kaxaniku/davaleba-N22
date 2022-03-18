<?php
namespace Models;

class MainModel extends Database {
    public function GET()
    {
        $stm = $this->connection->query('SELECT * FROM main');
        $stm->execute();
        return $stm->fetch();
    }
    public function UPDATE($title, $header, $text,$imgName) {
        $stm = $this->connection->prepare('UPDATE main
        SET title = :title,
            header = :header,
            text = :text');

$stm->bindParam('title', $title);
$stm->bindParam('header', $header);
$stm->bindParam('text', $text);
$stm->execute();
if ($imgName) {
    $stm = $this->connection->prepare('UPDATE main
    SET image = :image');

$stm->bindParam('image', $imgName);
$stm->execute();
}
    }
}
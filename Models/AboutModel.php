<?php
namespace Models;

class AboutModel extends Database {
    public function GET()
    {
        $stm = $this->connection->query('SELECT * FROM about');
        $stm->execute();
        return $stm->fetch();
    }
    public function UPDATE($H_title, $Abt_title, $H_text, $Abt_text) {
        $stm = $this->connection->prepare('UPDATE about
        SET H_title = :H_title,
            Abt_title = :Abt_title,
            H_text = :H_text,
            Abt_text = :Abt_text');

$stm->bindParam('H_title', $H_title);
$stm->bindParam('Abt_title', $Abt_title);
$stm->bindParam('H_text', $H_text);
$stm->bindParam('Abt_text', $Abt_text);

$stm->execute();
    }
}
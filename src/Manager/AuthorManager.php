<?php

// src/Manager/AuthorManager.php

namespace Manager;

use Entity\Author;
use PDO;

class AuthorManager
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Insert un auteur dans la base de données.
     *
     * @param Author $author
     */
    public function insert(Author $author)
    {
        $sql = 'INSERT INTO author(name) VALUES (:name)';

        $insert = $this->connection->prepare($sql);

        $insert->execute ([
            'name' => $author->getName(),
            ]);
    }

    public function update(Author $author) {
        $sql ='UPDATE author set name=:name WHERE id=:id LIMIT 1';

        $update = $this->connection->prepare($sql);

        $update->execute([
            'id'=> $author->getId(),
            'name'=> $author->getName(),
            ]);
    }
}

?>
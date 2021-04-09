<?php

// src/Repository/AuthorRepository.php

namespace Repository;

use Entity\Author;
use PDO;

class AuthorRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Author[]
     */
    
    public function findAll(): array
    {
        $sql = 'SELECT id, name FROM author';

        $statement = $this->connection->query($sql);

        $authors = [];

        while (false !== $data = $statement->fetch()) {
            $author = new Author();
            $author
                ->setId($data['id'])
                ->setName($data['name']);

            $authors[] = $author;
        }

        return $authors;
    }
}

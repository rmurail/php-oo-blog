<?php

// src/Repository/PostRepository.php

namespace Repository;

use PDO;

class PostRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

}
 

?>
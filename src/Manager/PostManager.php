<?php

// src/Manager/PostManager.php

namespace Manager;

use PDO;

class PostManager
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

}


?>
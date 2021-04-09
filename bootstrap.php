<?php

define('PROJECT_ROOT', __DIR__);

// Auto-chargement de classes
spl_autoload_register(function($class) {
    require __DIR__ . '/src/' . str_replace('\\', '/' , $class) . '.php';
});


// connexion BDD
$dsn  = 'mysql:dbname=php-oo-blog;host=127.0.0.1;port=8889';
$user = 'php-oo-blog';
$pwd  = 'php-oo-blog';

$connection = new PDO($dsn, $user, $pwd, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
]);

?>



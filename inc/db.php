<?php

// TODO #1 créer un objet PDO permettant de se connecter à la base de données "videogame"
// et le stocker dans la variable $pdo
// --- START OF YOUR CODE ---
$dsn = 'mysql:dbname=videogame;host=localhost;charset=UTF8';
$user = 'videogame';
$password = 'videogame';

try {
    $pdoDBConnection = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
} catch (PDOException $exception) {
    echo 'Erreur de connexion';
    exit();
}





// --- END OF YOUR CODE ---

<?php

try {
    $db = new PDO('mysql:host=localhost; dbname=connexion_inscription', 'root', '');
    echo "Vous etes connecter";
} catch (\PDOException $e) {
    echo "ERROR Vous n'etes pas conneter" . $e->getMessage();
}
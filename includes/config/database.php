<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'gavial177', 'bienesraices');

    if(!$db) {
        echo "Error, can't connect database to server ";
        exit;
    } 

    return $db;
}
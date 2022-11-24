<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'gavial177', 'bienesraices');

    if(!$db) {
        echo "Error, can't connect database to server ";
        exit;
    } 

    return $db;
}
<?php 

// CONNCET DB

// add header 
require 'includes/app.php';
$db = conectarDB();

// CREATING USER 

$email = "correo@correo.com";
$password = "123456";

// HASHING PASSWORD 

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// SENDING VALUES TO DB

$query = " INSERT INTO usuario (email, password) VALUES ( '${email}', '${passwordHash}' ); ";

mysqli_query($db, $query);

?> 
<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $start ? 'start' : '' ?>" >
        <div class="container container-header">

            <div class="bar">

                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>

                <div class="movile-menu">
                    <img class="bmenu" src="/build/img/barras.svg" alt="responsive menu">
                    <img class="btnDarkmode" src="/build/img/dark-mode.svg" >
                </div>

                <nav class="nav">
                    <a href="us.php">About us</a>
                    <a href="advertisements.php">Properties</a>
                    <a href="blog.php">Blog</a>
                    <a href="contact.php">Contact</a>
                    <?php if($auth){ ?>
                        <a href="sign-off.php">Sign off</a>
                    <?php }else{ ?> 
                        <a href="login.php">Login</a>
                    <?php } ?> 
                </nav>

            </div>

            <?php if($start){?> 
                <h1>Sale of houses and exclusive luxury apartments</h1>
            <?php } ?> 
        </div>
    </header>
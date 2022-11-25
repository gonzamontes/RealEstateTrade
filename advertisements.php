<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container">
        <h2>Houses and apartments for sale</h2>

        <?php 

            $lim = 100;
            include 'includes/templates/advertisements.php';

        ?> 

    </main>

    <?php 
        incluirTemplate('footer');
    ?>  
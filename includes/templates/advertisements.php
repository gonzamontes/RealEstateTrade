<?php
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades LIMIT ${lim}";

    $resultado = mysqli_query($db, $query);

?> 

<div class="container-advertisements">

    <?php while($propiedad = mysqli_fetch_assoc($resultado)){ ?> 
            
            <div class="advertisement">

            
                    <img src="/imagenesSubidas/<?php echo $propiedad['imagen']; ?>" alt="anuncio" loading="lazy">

                <div class="container-advertisement">

                    <h3 class="title"><?php echo $propiedad['titulo']; ?></h3>

                    <p><?php echo $propiedad['descripcion']; ?></p>

                    <p class="price">$<?php echo $propiedad['precio']; ?></p>

                    <ul class="icons-caracteristics">
                        <li>
                            <img class="iconC" src="build/img/icono_wc.svg" loading="lazy" alt="bath icon">
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li>
                            <img class="iconC" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="parking icon">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                        <li>
                            <img class="iconC" src="build/img/icono_dormitorio.svg" loading="lazy" alt="room icon">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                    </ul>

                    <a href="advertisement.php?id=<?php echo $propiedad['id']; ?>" class="btn-yellow-block">
                        View property
                    </a> 

                </div>
            </div>

    <?php } ?>    

        </div>

        <?php 
            mysqli_close($db);
        ?> 
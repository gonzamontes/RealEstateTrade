<?php 
    
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('location: /');
    }

    // database
    require 'includes/config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades WHERE id = ${id}";

    $resultado = mysqli_query($db, $query);

    if(!$resultado->num_rows){
        header('location: /');
    }

    $propiedad = mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container section propertySection centered-content">
        <h1 class="title"><?php echo $propiedad['titulo'] ?></h1> 

            <img src="/imagenesSubidas/<?php echo $propiedad['imagen'] ?>" alt="property image" loading="lazy">

        <div class="property-overview">
            <p class="price">$<?php echo $propiedad['precio'] ?></p>

            <ul class="icons-caracteristics">
                <li>
                    <img class="iconC" src="build/img/icono_wc.svg" loading="lazy" alt="bath icon">
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>
                <li>
                    <img class="iconC" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="parking icon">
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>
                <li>
                    <img class="iconC" src="build/img/icono_dormitorio.svg" loading="lazy" alt="room icon">
                    <p><?php echo $propiedad['habitaciones'] ?></p>
                </li>
            </ul>

            <p><?php echo $propiedad['descripcion'] ?></p>
        </div>

    </main>

    <?php 
        mysqli_close($db);

        incluirTemplate('footer');
    ?>  
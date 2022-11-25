<?php 
    // database 
        // import conection 
        require '../includes/config/database.php';
        $db = conectarDB();

        //create query
        $query = "SELECT * FROM propiedades";

        // consult the db 
        $resultadoConsulta = mysqli_query($db, $query);

    // displays the message if the user created a property
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

            // first delete the photo from the local folder

            $query = "SELECT imagen FROM propiedades WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenesSubidas/'.$propiedad['imagen']);

            // then delete data from database

            $query = "DELETE FROM propiedades WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('location: /admin?resultado=3');
            }
        }
    }

    require '../includes/funciones.php';
    incluirTemplate('header')

?> 

    <main class="container section">
        <h1>Real estate manager</h1>
        <?php if($resultado == 1) { ?>
            <p class="success alert">
                Succesfully created!
            </p>
        <?php } else if ($resultado == 2){?>
            <p class="success alert">
                Succesfully update!
            </p>
        <?php } else{ ?> 
            <p class="success-delete alert">
                Property deleted successfully.
            </p>
            <?php } ?>


    <table class="property">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody> <!-- show results of db -->
            <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)){?> 
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td><img src="/imagenesSubidas/<?php echo $propiedad['imagen']; ?>" class="table-img"></td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td class="flexing">
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="btn-yellow-dark">Update</a>
                        <form class="form-delete" method="POST">
                            <input type="hidden" name="id" value=" <?php echo $propiedad['id']; ?> " >
                            <input type="submit" class="btn-red delete-btn" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php } ?> 
            </tbody>
    </table>

    <a href="/admin/propiedades/crear.php" class="btn btn-grey">New property</a>
    </main>


<?php 
    // close connection to db 
    mysqli_close($db);


    incluirTemplate('footer');
?> 
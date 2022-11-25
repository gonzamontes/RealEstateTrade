<?php 

    // validates id from url 

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /admin');
    }

    // database 

    require '../../includes/config/database.php';

    $db = conectarDB();

    // getting property from database 

    $consultaPropiedades = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultadoPropiedades = mysqli_query($db, $consultaPropiedades);
    $propiedad = mysqli_fetch_assoc($resultadoPropiedades);

    // getting vendors from database 

    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // array and object with error messages

    $alertas = [
        'titulo' => "You must add a title",
        'precio' => "You must add a price",
        'descripcion' => "You must add a description and must have a minimum of 30 characters",
        'habitaciones' => "You must add quantity of bedrooms",
        'wc' => "You must add quantity of bathrooms",
        'estacionamiento' => "You must add quantity of garages",
        'vendedor' => "You must select a seller",
        'imagen' => "The photo must weigh less than 100Mb"

    ];

    $errores = [];

    // assign globals variables 

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedor = $propiedad['vendedorId'];
    $imagen = ['name' => '',
                'size' => 0,                
            ];
    $imagenPropiedad = $propiedad['imagen'];

    // run code after user submits form

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // string validation to avoid hacks situations

        $titulo = mysqli_real_escape_string( $db , $_POST['titulo'] ) ;
        $precio = mysqli_real_escape_string( $db , $_POST['precio'] ) ;
        $descripcion = mysqli_real_escape_string( $db , $_POST['descripcion'] ) ;
        $habitaciones = mysqli_real_escape_string( $db , $_POST['habitaciones'] ) ;
        $wc = mysqli_real_escape_string( $db , $_POST['wc'] ) ;
        $estacionamiento = mysqli_real_escape_string( $db , $_POST['estacionamiento'] ) ;
        $vendedor = mysqli_real_escape_string( $db , $_POST['vendedor'] ) ;
        $creado = date('Y/m/d');

        // create image variable using _FILES

        $imagen = $_FILES['imagen'];

        // check if someone input is null 

        if(!$titulo || !$precio || ( strlen($descripcion) < 30 ) || !$habitaciones || !$wc || !$estacionamiento || !$vendedor || $imagen['size'] > (1000 * 1000) ){
            $errores[0] = "Missing fields to fill!";
        };

        // check if errors array is empty 

        if(empty($errores)){

                // ----- UPDATING PHOTOS ------

                // ---------- creating a folder to save uploaded files
                $carpetaImagenes = '../../imagenesSubidas/';

                // ---------- check if the folder exists 
                if(!is_dir($carpetaImagenes)){
                    mkdir($carpetaImagenes);
                }

                $nombreImagen = '';

                // Check if we upload a new photo, if we do then we delete the previous one, if not, we leave the previous one

                if($imagen['name']){

                    // Delete previous image 
                    unlink($carpetaImagenes . $propiedad['imagen']);

                    // ---------- creating a unique name for the photo
                    $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                    // ---------- upload the photo to the new folder 
                    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
                    
                }else{
                    $nombreImagen = $propiedad['imagen'];
                }


            // update db
                    
            $query = " UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}',descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, vendedorId = ${vendedor}, creado = '${creado}' WHERE id = ${id} ";

            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {

                header('Location: /admin?resultado=2');

            };

        } 

    }
    
    require '../../includes/funciones.php';

    incluirTemplate('header')
?> 

    <!------------------------------------ file start here  -------------------------------->

    <main class="container section">
        <h1>Update Property</h1>

        

        <?php foreach($errores as $e){ ?>
            <div class="msj-container">
                <?php echo "<p class='msj'> ${e} </p>" ?> 
            </div>
        <?php }?>

        <!-- create a form using POST method and enctype for files  -->

        <form class="form" method="POST" enctype="multipart/form-data">
            <fieldset>

                <legend>General information</legend>

                <!-- title -->

                <?php if(!$titulo && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['titulo']; ?> 
                    </div>
                <?php } ?> 
                <label for="titulo">Title:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Property title" value="<?php echo $titulo; ?>"> 

                <!-- price -->
                
                <?php if(!$precio && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['precio']; ?> 
                    </div>
                <?php } ?> 
                <label for="precio">Price:</label>
                <input type="number" id="precio" name="precio" placeholder="Property price" value="<?php echo $precio; ?>">

                <!-- image -->

                <?php if($imagen['size'] > (1000 * 1000) && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['imagen']; ?> 
                    </div>
                <?php } ?> 
                <label for="imagen">Image:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <img src="/imagenesSubidas/<?php echo $imagenPropiedad; ?>" class="update-img" alt="">

                <!-- description -->

                <?php if( $descripcion<30 && !empty($errores) ) {?> 
                    <div class="alert error">
                        <?php echo $alertas['descripcion']; ?> 
                    </div>
                <?php } ?> 
                <label for="descripcion">Description:</label>
                <textarea id="descripcion" name="descripcion" value="<?php echo $descripcion ; ?>"><?php echo $descripcion ; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Property information</legend>

                <!-- bedrooms -->

                <?php if(!$habitaciones && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['habitaciones']; ?> 
                    </div>
                <?php } ?> 
                <label for="habitaciones">Bedrooms:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Number of bedrooms" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <!-- bathrooms -->

                <?php if(!$wc && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['wc']; ?> 
                    </div>
                <?php } ?>
                <label for="wc">Bathrooms:</label>
                <input type="number" id="wc" placeholder="Number of bathrooms" name="wc" min="1" max="9" value="<?php echo $wc; ?>">

                <!-- garage -->

                <?php if(!$estacionamiento && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['estacionamiento']; ?> 
                    </div>
                <?php } ?>
                <label for="estacionamiento">Garage:</label>
                <input type="number" id="estacionamiento" placeholder="Number of garages" name="estacionamiento" min="1" max="9" value="<?php echo $estacionamiento; ?>">

            </fieldset>

            <fieldset>

                <legend>Seller</legend> 

                <!-- sellers -->

                <?php if(!$vendedor && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['vendedor']; ?> 
                    </div>
                <?php } ?>
                <select name="vendedor" id="vendedor">
                    <option value="" selected disabled >- Select a Seller -</option>
                    <?php while( $row = mysqli_fetch_assoc($resultado) ) { ?> 
                        <option <?php echo $vendedor === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['nombre'] . " " . $row['apeliido']; ?> </option>
                    <?php } ?> 
                </select>

            </fieldset>

            <!-- submit button -->

            <div class="botones">

                <input type="submit" value="Update Property" class="btn btn-green">
                <a href="../index.php" class=" return btn btn-green">Return</a>

            </div>
            
        
        </form>

    </main>


<?php 
    incluirTemplate('footer');
?> 
<?php 
    // database 

    require '../../includes/config/database.php';

    $db = conectarDB();

    // array and object with error messages

    $alertas = [
        'titulo' => "You must add a title",
        'precio' => "You must add a price",
        'descripcion' => "You must add a description and must have a minimum of 50 characters",
        'habitaciones' => "You must add quantity of bedrooms",
        'wc' => "You must add quantity of bathrooms",
        'estacionamiento' => "You must add quantity of garages",
        'vendedor' => "You must select a seller"

    ];

    $errores = [];

    // assign each variable its value

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedor = '';

    // run code after user submits form

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor = $_POST['vendedor'];

        if(!$titulo || !$precio || ( strlen($descripcion) < 50 ) || !$habitaciones || !$wc || !$estacionamiento || !$vendedor){
            $errores[0] = "Missing fields to fill!";
        };

        // check if errors array is empty 

        if(empty($errores)){

            // insert into db
                    
            $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId ) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor'  ) ";

            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                echo '<script language="javascript">alert("Form sent successfully!");</script>';
            };

        } 

    }
    
    require '../../includes/funciones.php';
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
                </nav>

            </div>
        </div>
    </header>

    <!------------------------------------ file start here  -------------------------------->

    <main class="container section">
        <h1>Create</h1>

        

        <?php foreach($errores as $e){ ?>
            <div class="msj-container">
                <?php echo "<p class='msj'> ${e} </p>" ?> 
            </div>
        <?php }?>


        <form class="form" action="/admin/propiedades/crear.php" method="POST">
            <fieldset>

                <legend>General information</legend>

                <?php if(!$titulo && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['titulo']; ?> 
                    </div>
                <?php } ?> 
                <label for="titulo">Title:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Property title" value="<?php echo $titulo; ?>"> 
                
                <?php if(!$precio && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['precio']; ?> 
                    </div>
                <?php } ?> 
                <label for="precio">Price:</label>
                <input type="number" id="precio" name="precio" placeholder="Property price" value="<?php echo $precio; ?>">


                <!-- <?php //if(!$precio) {?> 
                    <div class="alert error">
                        <?php //echo $alertas['precio']; ?> 
                    </div>
                <?php //} ?> -->
                <label for="imagen">Image:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <?php if(!$descripcion && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['descripcion']; ?> 
                    </div>
                <?php } ?> 
                <label for="descripcion">Description:</label>
                <textarea id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>"></textarea>

            </fieldset>

            <fieldset>
                <legend>Property information</legend>

                <?php if(!$habitaciones && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['habitaciones']; ?> 
                    </div>
                <?php } ?> 
                <label for="habitaciones">Bedrooms:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Number of bedrooms" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <?php if(!$wc && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['wc']; ?> 
                    </div>
                <?php } ?>
                <label for="wc">Bathrooms:</label>
                <input type="number" id="wc" placeholder="Number of bathrooms" name="wc" min="1" max="9" value="<?php echo $wc; ?>">

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

                <?php if(!$vendedor && !empty($errores)) {?> 
                    <div class="alert error">
                        <?php echo $alertas['vendedor']; ?> 
                    </div>
                <?php } ?>
                <select name="vendedor" id="vendedor" value="<?php echo $vendedor; ?>">
                    <option value="" selected disabled >- Select a Seller -</option>
                    <option value="1">Gonzalo</option>
                    <option value="2">Nicolas</option>
                </select>

            </fieldset>

            <div class="botones">

                <input type="submit" value="Create Property" class="btn btn-green">
                <a href="../index.php" class=" return btn btn-green">Return</a>

            </div>
            
        
        </form>

    </main>


<?php 
    incluirTemplate('footer');
?> 
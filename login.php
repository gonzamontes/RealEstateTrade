<?php 

    require 'includes/config/database.php';
    $db = conectarDB();

    $email = '';
    $password = '';

    $error = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) ;
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email){
            $error[] = "Invalid email";
        }

        if(!$password){
            $error[] = "Invalid password";
        }

        if(empty($error)){

            // get data from user 
            $query = "SELECT * FROM usuario WHERE email = '${email}' ";
            $resultado = mysqli_query($db, $query);

            // check if email exists in our db 
            if( $resultado->num_rows ){
                $usuario = mysqli_fetch_assoc($resultado);

                // check is password is correct 
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    // user is authenticated so we can initialize session
                    session_start();

                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    // redirect user to home 

                    header('location: /admin');

                    
                }else {
                    $error[] = "el password es incorrecto";
                };

            }else{
                $error[] = "el usuario no existe";
            }

        }

    };

    // add header 
    require 'includes/funciones.php';
    incluirTemplate('header');
?> 

    <main class="container section">
        <h1>Login</h1>

        <?php foreach($error as $e){ ?>
            <div class="alert error">
                <?php echo $e; ?> 
            </div>
        <?php } ?> 

        <form method="POST" class="form centered-content">
            <fieldset>
                <legend>Email and Password</legend>

                <label for="email" >E-mail</label>
                <input type="email" name="email" id="email" placeholder="Your email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" required>

            </fieldset>

            <input type="submit" value="Login" class="btn btn-green">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?> 
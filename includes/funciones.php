<?php 

require 'app.php';

function incluirTemplate( $nombre , $start = false ){
    include TEMPLATES_URL . "/${nombre}.php";
}

?>
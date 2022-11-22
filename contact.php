<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    
    <main class="container">
        <h1>Titulo Pagina</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.webp" type="image/jpeg">
            <img src="build/img/destacada3.jpg" loading="lazy" alt="contact image">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form action="" class="form">
            <fieldset>
                <legend>Informacion personal</legend>

                <label for="name">nombre</label>
                <input type="text" id="name" placeholder="tu nombre">

                <label for="email">e-mail</label>
                <input type="email" id="email" placeholder="tu email">

                <label for="phone">telefono</label>
                <input type="tel" id="phone" placeholder="tu telefono">

                <label for="msj">mensaje</label>
                <textarea id="msj"></textarea>

            </fieldset>

            <fieldset>
                <legend>info sobre propiedd</legend>

                <label for="options">Venta o compra</label>
                <select name="" id="options">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="buy">compra</option>
                    <option value="sell">venta</option>
                </select>

                <label for="budget">precio o presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="budget">
            </fieldset>

            <fieldset>
                <legend>Contact</legend>
                <p>como desea ser contactado</p>
                <div class="contact-form"> 
                    <label for="contact-phone">Telefono</label>
                    <input name="contact" class="radio" type="radio" value="phone" id="contact-email">

                    <label for="contact-phone">email</label>
                    <input name="contact" type="radio" value="email" id="contact-email">
                </div>

                <p>Si eligio telefono elija fecha y hora (9:00hs hasta 20:00hs) para contacarnos</p>

                <label for="date">fecha</label>
                <input type="date" id="date">

                <label for="hour">hora</label>
                <input type="time" id="hour" min="08:00" max="22:00">

            </fieldset>

            <input type="submit" value="send" class="btn-green" >
        </form>
    </main>

    <?php 
        incluirTemplate('footer');
    ?> 
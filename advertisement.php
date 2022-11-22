<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container section propertySection centered-content">
        <h1>House</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.webp" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="property image" loading="lazy">
        </picture>

        <div class="property-overview">
            <p class="price">$3,000,000</p>

            <ul class="icons-caracteristics">
                <li>
                    <img class="iconC" src="build/img/icono_wc.svg" loading="lazy" alt="bath icon">
                    <p>3</p>
                </li>
                <li>
                    <img class="iconC" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="parking icon">
                    <p>3</p>
                </li>
                <li>
                    <img class="iconC" src="build/img/icono_dormitorio.svg" loading="lazy" alt="room icon">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sequi consequatur veritatis sit impedit odit similique rem suscipit vero distinctio eveniet voluptates esse obcaecati quas sed aliquam, quam quia facilis dicta omnis. Optio qui reprehenderit odit exercitationem officiis ut neque, culpa quis, perspiciatis temporibus quaerat laudantium in ipsa, adipisci aliquid!</p>
        
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet voluptatem repellendus aliquid vero, quos suscipit voluptate veniam debitis ex eveniet?</p>
        </div>

    </main>

    <?php 
        incluirTemplate('footer');
    ?>  
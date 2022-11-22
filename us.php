<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container">
        <h1>Know more about us!</h1>

        <div class="container-us">
            <div class="image-us">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Image of us" loading="lazy">
                </picture>
            </div>
    
            <div class="us-text">
                <blockquote>
                    25 years of experience
                </blockquote>
    
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. At laudantium, mollitia aliquam aliquid id, molestias quis, nemo modi quaerat voluptatum rem nihil! Adipisci quos temporibus qui laboriosam est sit eum, earum officia explicabo quasi animi aspernatur autem alias possimus repudiandae fuga tenetur distinctio, similique amet non. Provident id tenetur ullam.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ipsum quia dolorem quisquam eos aliquam amet, incidunt perferendis molestiae vero, impedit commodi culpa et voluptate omnis dolorum obcaecati! Laboriosam minus praesentium ullam nostrum possimus ipsa accusantium, obcaecati dolorem excepturi doloremque iure accusamus eos.
                </p>
            </div>
        </div>
    </main>

    <section class="container">
        <h1>More Info</h1>

        <div class="icons-us">
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Security icon" loading="lazy">
                <h3>Security</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Price icon" loading="lazy">
                <h3>Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Time icon" loading="lazy">
                <h3>On time</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        </div>
    </section>

    <?php 
        incluirTemplate('footer');
    ?> 
<?php 
require 'includes/funciones.php';
incluirTemplate('header', $start = true);
?>

    <!------------------------------- seccion de info --------------------->

    <main class="container">
        <h1>Mas sobre nosotros</h1>

        <div class="icons-us">
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Security icon" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Price icon" loading="lazy">
                <h3>precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Time icon" loading="lazy">
                <h3>a tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        </div>
    </main>

    <!------------------------------- seccion de casas --------------------->

    <section class="section s1 container">
        <h2>Casa y depas en venmta</h2>

        <div class="container-advertisements">
            
            <div class="advertisement">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="container-advertisement">

                    <h3>casa de lujo de lago</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit?</p>

                    <p class="price">400000</p>

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

                    <a href="advertisements.php" class="btn-yellow-block">
                        ver propiedad
                    </a>

                </div>
            </div>
            
            <div class="advertisement">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="container-advertisement">

                    <h3>casa de lujo de montaña</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit?</p>

                    <p class="price">345000</p>

                    <ul class="icons-caracteristics">
                        <li>
                            <img class="iconC" src="build/img/icono_wc.svg" loading="lazy" alt="bath icon">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="iconC" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="parking icon">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="iconC" src="build/img/icono_dormitorio.svg" loading="lazy" alt="room icon">
                            <p>5</p>
                        </li>
                    </ul>

                    <a href="advertisements.php" class="btn-yellow-block">
                        ver propiedad
                    </a>

                </div>
            </div>
            
            <div class="advertisement">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="container-advertisement">

                    <h3>casa de lujo Barrio privado</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit?</p>

                    <p class="price">555000</p>

                    <ul class="icons-caracteristics">
                        <li>
                            <img class="iconC" src="build/img/icono_wc.svg" loading="lazy" alt="bath icon">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="iconC" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="parking icon">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconC" src="build/img/icono_dormitorio.svg" loading="lazy" alt="room icon">
                            <p>6</p>
                        </li>
                    </ul>

                    <a href="advertisements.php" class="btn-yellow-block">
                        ver propiedad
                    </a> 

                </div>
            </div>

        </div>

        <dev class="align-right">
            <a href="advertisements.php" class="btn-green">Ver todas</a>
        </dev>

    </section>

    <!--------------- seccion de contacto  ----------------->

    <section class="img-contact">
        <h2>Encuentra la casa sde tus suelos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis molestiae incidunt corporis veritatis ipsam at ipsa aspernatur iste laboriosam! Dolorem debitis et ab excepturi, corrupti minus harum doloribus pariatur culpa!</p>
        <a href="contacto.php" class="btn-yellow">Contactanos</a>
    </section>

    <!--------------- seccion de blog  ----------------->

    <div class="container section down-section">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="blog-entry">
                <div class="image">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Entry text blog" loading="lazy">
                    </picture>
                </div>

                <div class="text-entry">
                    <a href="entry.php">
                        <h4>terraza y techo en tu casa</h4>
                        <p class="meta-info">Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                        <p>
                            Consejos para construir terraza en techo con los mejores materiales
                        </p>
                    </a>
                </div>
            </article>
            
            <article class="blog-entry">
                <div class="image">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Entry text blog" loading="lazy">
                    </picture>
                </div>

                <div class="text-entry">
                    <a href="entry.php">
                        <h4>guia decoracion de tu hogar</h4>
                        <p class="meta-info">Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                        <p>
                            Maximiza el espacio de tu hogar con esta guia aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <!------------------------------- testimonios ----------------------------->

        <section class="testimonials">
            <h3>Testimoniso</h3>

            <div class="testimonial">
                <blockquote>
                    el personal se comporto de una excelente dorma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>
                <p>- Gonzalo Montes</p>
            </div>
        </section>
    </div>

    <!-- ----------------------------- footer --------------------------- -->
    <?php 
        incluirTemplate('footer');
    ?>  
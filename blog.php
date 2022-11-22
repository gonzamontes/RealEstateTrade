<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container centered-content">
        <h1>nuestro blog</h1>

        <!-- blog 1 -->

        <article class="blog-entry">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Entry text blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="post.php">
                    <h4>terraza y techo en tu casa</h4>
                    <p>Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                    <p>
                        Consejos para construir terraza en techo con los mejores materiales
                    </p>
                </a>
            </div>
        </article>

        <!-- blog 2 -->
        
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
                    <p>Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                    <p>
                        Maximiza el espacio de tu hogar con esta guia aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>

        <!-- blog 3 -->

        <article class="blog-entry">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="Entry text blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>terraza y techo en tu casa</h4>
                    <p>Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                    <p>
                        Consejos para construir terraza en techo con los mejores materiales
                    </p>
                </a>
            </div>
        </article>

        <!-- blog 4 -->
        
        <article class="blog-entry">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="Entry text blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>guia decoracion de tu hogar</h4>
                    <p>Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                    <p>
                        Maximiza el espacio de tu hogar con esta guia aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </main>

    <?php 
        incluirTemplate('footer');
    ?> 
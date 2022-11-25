<?php 
require 'includes/funciones.php';
incluirTemplate('header', $start = true);
?>

    <!------------------------------- seccion de info --------------------->

    <main class="container">
        <h1>More about us</h1>

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
                <h3>On time!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sunt mollitia fugit eveniet excepturi, unde, quasi quam quibusdam amet ipsum sed vero quisquam porro quis nisi distinctio maxime culpa veritatis.</p>
            </div>
        </div>
    </main>

    <!------------------------------- seccion de casas --------------------->

    <section class="section s1 container">
        <h2>Houses & apartments for sale</h2>

        <?php 

            $lim = 3;
            include 'includes/templates/advertisements.php';
        
        ?> 

        <dev class="align-right">
            <a href="advertisements.php" class="btn-green">View all</a>
        </dev>

    </section>

    <!--------------- seccion de contacto  ----------------->

    <section class="img-contact">
        <h2>Find your dreams house</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis molestiae incidunt corporis veritatis ipsam at ipsa aspernatur iste laboriosam! Dolorem debitis et ab excepturi, corrupti minus harum doloribus pariatur culpa!</p>
        <a href="contacto.php" class="btn-yellow">Contact us</a>
    </section>

    <!--------------- seccion de blog  ----------------->

    <div class="container section down-section">
        <section class="blog">
            <h3>Our blog</h3>

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
                        <h4>Terrace and roof in your house</h4>
                        <p class="meta-info">Written on <span>20/10/2022</span> by <span>Admin</span></p>
                        <p>
                        Tips for building a terrace with the best materials
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
                        <h4>Home decoration guide</h4>
                        <p class="meta-info">Written on <span>22/10/2022</span> by <span>Admin</span></p>
                        <p>
                            Make the most of the space in your home with this guide, learn to combine furniture and colors to bring life to your home.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <!------------------------------- testimonios ----------------------------->

        <section class="testimonials">
            <h3>Testimonials</h3>

            <div class="testimonial">
                <blockquote>
                    The staff behaved in an excellent manner, very good attention and the house that they offered me met all my expectations.
                </blockquote>
                <p>- Ricky Fort</p>
            </div>
        </section>
    </div>

    <!-- ----------------------------- footer --------------------------- -->
    <?php 
        incluirTemplate('footer');
    ?>  
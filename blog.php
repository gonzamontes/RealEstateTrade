<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="container centered-content">
        <h1>Our blog</h1>

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
                    <h4>Terrace and roof in your house</h4>
                    <p>Written on <span>20/10/2022</span> by <span>Admin</span></p>
                    <p>
                        Tips for building a roof terrace with the best materials
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
                    <h4>Outdoor decoration</h4>
                    <p>Written on <span>20/10/2022</span> by <span>Admin</span></p>
                    <p>
                    Decorate your exteriors in a minimalist way, order and organize your furniture
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
                    <h4>Home decoration guide</h4>
                    <p>Written on <span>20/10/2022</span> by <span>Admin</span></p>
                    <p>
                        Maximize the space in your home with this guide learn to combine furniture and colors to give life to your space
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
                    <h4>Paint your room with this guide!</h4>
                    <p>Escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                    <p>
                        Choose the best colors so that your room looks different from the others
                    </p>
                </a>
            </div>
        </article>
    </main>

    <?php 
        incluirTemplate('footer');
    ?> 
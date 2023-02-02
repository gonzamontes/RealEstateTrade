<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="container section centered-content">
        <h1>Home decoration guide</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.webp" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="property image" loading="lazy">
        </picture>

        <p class="meta-info">Written on <span>20/10/2022</span> by <span>Admin</span></p>

        <div class="property-overview">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sequi consequatur veritatis sit impedit odit similique rem suscipit vero distinctio eveniet voluptates esse obcaecati quas sed aliquam, quam quia facilis dicta omnis. Optio qui reprehenderit odit exercitationem officiis ut neque, culpa quis, perspiciatis temporibus quaerat laudantium in ipsa, adipisci aliquid!</p>
        
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet voluptatem repellendus aliquid vero, quos suscipit voluptate veniam debitis ex eveniet?</p>
        </div>

    </main>

    <?php 
        incluirTemplate('footer');
    ?>  
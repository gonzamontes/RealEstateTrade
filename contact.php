<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    
    <main class="container">
        <h1>Contact us!</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.webp" type="image/jpeg">
            <img src="build/img/destacada3.jpg" loading="lazy" alt="contact image">
        </picture>

        <h2>Complete the contact form</h2>

        <form action="" class="form">
            <fieldset>
                <legend>Personal information</legend>

                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Your name">

                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Your email">

                <label for="phone">Phone</label>
                <input type="tel" id="phone" placeholder="Your phone">

                <label for="msj">Message</label>
                <textarea id="msj"></textarea>

            </fieldset>

            <fieldset>
                <legend>Property info</legend>

                <label for="options">Buy or sell</label>
                <select name="" id="options">
                    <option value="" disabled selected>Select</option>
                    <option value="buy">Buy</option>
                    <option value="sell">Sell</option>
                </select>

                <label for="budget">Price or budget</label>
                <input type="number" placeholder="Your price or budget" id="budget">
            </fieldset>

            <fieldset>
                <legend>Contact</legend>
                <p>How do you want us to contact you</p>
                <div class="contact-form"> 
                    <label for="contact-phone">Phone</label>
                    <input name="contact" class="radio" type="radio" value="phone" id="contact-email">

                    <label for="contact-phone">Email</label>
                    <input name="contact" type="radio" value="email" id="contact-email">
                </div>

                <p>If you choose phone, choose date and time (9:00hs to 20:00hs) to contact you</p>

                <label for="date">Date</label>
                <input type="date" id="date">

                <label for="hour">Hour</label>
                <input type="time" id="hour" min="08:00" max="22:00">

            </fieldset>

            <input type="submit" value="Send" class="btn-green" >
        </form>
    </main>

    <?php 
        incluirTemplate('footer');
    ?> 
<?php
    include './includes/templates/header.php'
?>

    <main class="contenedor seccion">
        <h1>Contact</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpeg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" loading="lazy" alt="Imagen Contacto">
        </picture>

        <h2>Fill out the contact form.</h2>

        <form class="formulario" action="">
            <fieldset>
                <legend>Personal Information</legend>

                <label for="name">Name</label>
                <input type="text" placeholder="Enter your name" id="name">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Enter your email" id="email">

                <label for="phone">Phone number</label>
                <input type="tel" placeholder="Enter your phone" id="phone">

                <label for="phone">Message</label>
                <textarea name="" id="message" cols="30" rows="10"></textarea>
               
            </fieldset>
               
            <fieldset>
                <legend>Property Information</legend>

                <label for="sellOrBuy">Sell or Buy</label>
                <select id="sellOrBuy" name="sellOrBuy" onclick="changeOrder()">
                <!-- Opción vacía -->
                <option value="" disabled selected>-- Select an option --</option>
                <!-- Opciones originales -->
                <option value="sell">Sell</option>
                <option value="buy">Buy</option>
                </select>

                <label for="budget">Budget</label>
                <input type="number" id="budget" name="quantity" min="0" placeholder="Your price or budget">

            </fieldset>

            <fieldset>
                <legend>Property Information</legend>
                <p>How would you like to be contacted?</p>

                <div class="forma-contacto">
                    <label for="contactPhone">Phone</label>
                    <input type="radio" id="contactPhone" value="phone" name="contacto">
                  
                    <label for="contactEmail">E-mail</label>
                    <input type="radio" id="contactEmail" name="contacto" value="email">
                </div>

                <p>If you chose phone, please select date and time.</p>
                <label for="fecha">Date:</label>
                <input type="date"  id="fecha">

                <label for="hora">Hour:</label>
                <input type="time"  id="hora" min="09:00" max="18:00">
                
              </fieldset>
              
              <input type="submit" value="Enviar" class="boton-verde">

        </form>

    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">About Us</a>
                <a href="anuncios.html">Listings </a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contact</a>
            </nav>
        </div>

        <p class="copyright">All rights reserved 2024&copy; </p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
    <script src="build/js/app.js"></script>
</body>
</html>
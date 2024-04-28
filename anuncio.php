<?php
    include './includes/templates/header.php'
?>
    

    <main class="contenedor seccion contenido-centrado">
        <h1>House for Sale Facing the Forest</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, facilis nostrum excepturi est dolorem dolore nemo velit quam voluptate suscipit repudiandae dignissimos odio beatae, culpa rem illo blanditiis fuga consequuntur?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi corrupti nesciunt error iste nam modi, dolore quasi officiis autem magni sint ipsum fuga eligendi neque, molestias voluptas quibusdam? Dicta, delectus.</p>
        </div>
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
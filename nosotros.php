<?php
    include './includes/templates/header.php'
?>

    <main class="contenedor seccion">
        <h1>About Us</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Years of Experience
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde natus autem sit, consequatur nihil odio ullam corrupti corporis culpa dolore debitis similique maxime quae et facere sunt omnis tempora eligendi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, perferendis, sed asperiores iusto illo nesciunt excepturi maxime optio, corrupti cumque omnis adipisci culpa dignissimos iure. Possimus minima quas voluptatem sint.</p>
            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h1>More About Us</h1>

        <!--iconos-->
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Security</h3>
                <p> Adipisci eligendi earum natus praesentium. Quo ea quod laborum rem placeat doloribus, laboriosam, aperiam eum incidunt nemo itaque excepturi, ipsam modi atque!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Price</h3>
                <p> Adipisci eligendi earum natus praesentium. Quo ea quod laborum rem placeat doloribus, laboriosam, aperiam eum incidunt nemo itaque excepturi, ipsam modi atque!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>On time</h3>
                <p> Adipisci eligendi earum natus praesentium. Quo ea quod laborum rem placeat doloribus, laboriosam, aperiam eum incidunt nemo itaque excepturi, ipsam modi atque!</p>
            </div>
        </div>

    </section>


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
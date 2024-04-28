<?php
    include './includes/templates/header.php'
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Our Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terrace</h4>
                    <p>Written on: <span>29/03/2024</span> by: <span>Admin</span></p>
                    <p>
                        Tips for building a rooftop terrace with the best materials and saving money.
                    </p>
                    
                </a>
            </div>
        </article> <!--Article recomendable para entradas de blog-->

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guide for Home Decoration </h4>
                    <p>Written on: <span>29/03/2024</span> by: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide. Learn how to combine furniture and colors to bring your space to life.
                    </p>
                </a>
            </div>
        </article> <!--fin article-->


        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terrace</h4>
                    <p>Written on: <span>29/03/2024</span> by: <span>Admin</span></p>
                    <p>
                        Tips for building a rooftop terrace with the best materials and saving money.
                    </p>
                    
                </a>
            </div>
        </article> <!--Article recomendable para entradas de blog-->

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guide for Home Decoration </h4>
                    <p>Written on: <span>29/03/2024</span> by: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide. Learn how to combine furniture and colors to bring your space to life.
                    </p>
                </a>
            </div>
        </article> <!--fin article-->

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
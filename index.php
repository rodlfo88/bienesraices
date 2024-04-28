<?php
    include './includes/templates/header.php'
?>

    <main class="contenedor seccion">
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

    </main>

    <section class="seccion contenedor">
        <h2>Houses and apartments for sale</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">

                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp"> <!--importante colocar webp primero-->
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Luxury house on the lake</h3>
                    <p>"House by the lake with excellent views"</p>
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

                    <a href="anuncios.html" class="boton-amarillo-block">View property</a>
                </div> <!--cierre contenido-anuncio -->

            </div> <!--cierre anuncio-->

            <div class="anuncio">

                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp"> <!--importante colocar webp primero-->
                    <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Luxury house</h3>
                    <p>"House with modern design, as well as smart technology and furnished"</p>
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

                    <a href="anuncios.html" class="boton-amarillo-block">View property</a>
                </div> <!--cierre contenido-anuncio -->

            </div> <!--cierre anuncio-->

            <div class="anuncio">

                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp"> <!--importante colocar webp primero-->
                    <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>House with pool</h3>
                    <p>"House with pool and luxury finishes in the city, excellent opportunity"</p>
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

                    <a href="anuncios.html" class="boton-amarillo-block">View property</a>
                </div> <!--cierre contenido-anuncio -->

            </div> <!--cierre anuncio-->

        </div> <!--contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">View all properties</a>
        </div>

    </section>

    <section class="imagen-contacto">
        <h2>Find the house of your dreams</h2>
        <p>Fill out the contact form and an advisor will get in touch with you as soon as possible</p>
        <a href="contacto.html" class="boton-amarillo">Contact us</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Explore our blog</h3>
            
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
                        <p class="informacion-meta">Written on: <span>29/03/2024</span> by: <span>Admin</span></p>
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
                        <p class="informacion-meta">Written on: <span>29/03/2024</span> by: <span>Admin</span></p>

                        <p>
                            Maximize the space in your home with this guide. Learn how to combine furniture and colors to bring your space to life.
                        </p>
                    </a>
                </div>
            </article> <!--fin article-->

        </section>

        <section class="testimoniales">
            <h3>Customer Reviews</h3>

            <div class="testimonial">
                <blockquote>
                    The staff behaved in an excellent manner, providing very good attention, and the house they offered me meets all my expectations.
                </blockquote>
                <p>- Rodolfo Carrasquel</p>
            </div>
        </section>

    </div>

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
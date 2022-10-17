<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor secció">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Consectetur adipisicing elit. Dicta earum sapiente iste eos. Sint fugiat maiores libero architecto soluta illo excepturi molestias magnam nemo minus, magni autem inventore provident beatae!
                </p>

                <p>
                    Aliquam itaque iste, aut illum vitae aperiam, sunt dignissimos corporis saepe eveniet provident, obcaecati dolorum sequi laboriosam repellat earum harum fugiat veritatis!
                </p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta expedita, harum maiores commodi eius reiciendis fugiat hic, facere ex optio esse facilis inventore odit enim recusandae natus distinctio praesentium! Dolore.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta expedita, harum maiores commodi eius reiciendis fugiat hic, facere ex optio esse facilis inventore odit enim recusandae natus distinctio praesentium! Dolore.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta expedita, harum maiores commodi eius reiciendis fugiat hic, facere ex optio esse facilis inventore odit enim recusandae natus distinctio praesentium! Dolore.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>
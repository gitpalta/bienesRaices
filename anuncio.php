<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
           <source srcset="build/img/destacada.webp" type="image/webp">
           <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
                </li> 
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aperiam unde voluptatibus vel 
                blanditiis dignissimos vitae
                eaque magni saepe placeat quibusdam non animi veritatis sit ad, totam optio molestiae sed? 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut alias dolorum voluptate maxime quaerat 
                reprehenderit eum obcaecati adipisci odio,
                ducimus voluptatum veritatis ad eveniet beatae iusto doloremque nostrum voluptatibus impedit.</p>

        </div>
    </main>

<?php
    incluirTemplate('footer');
?>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>
<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>

        <picture>
           <source srcset="build/img/destacada2.webp" type="image/webp">
           <source srcset="build/img/destacada2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta" >Escrito el: <span>4/10/2022</span> por <span>Admin</span></p>

        <div class="resumen-propiedad">
            
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
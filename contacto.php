<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario" action="">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Ingresa tu nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Ingresa tu e-mail">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Ingresa tu teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje" cols="30" rows="10"></textarea>

            </fieldset>
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vende o Compra</label>

                <select name="" id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto">

            </fieldset>

            <fieldset>
                <legend>Forma de contacto</legend>
                
                <p>Cómo desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono">
                    
                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email">
                </div>

                <p>Si eligió teléfono elija la fecha a ser contactado</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="9:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>
<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'password', 'bienesraices_crud');

    if(!$db) {
        echo "Error. No se puedo conectar";
        exit; //detiene la ejecución del código para evitar exponer info sensible
    }

    return $db;
};

<?php
    include("config/conexionBD.php");
    $enviado = "Noenviado";

    if(isset($_POST['submit'])){
        // Datos para la inserción
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        if(strlen($nombre) > 0 and strlen($telefono) > 0 and strlen($correo) > 0 and strlen($mensaje) > 0){
            // Sentencia SQL de inserción
            $sql = "INSERT INTO contacto (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo','$mensaje')";
    
            // Ejecutar la sentencia
            if ($conn->query($sql) === TRUE) {
                $enviado = "enviado";
            } else {
                $enviado = false;
            }
    
            // Cerrar la conexión
            $conn->close();
        }
    }

    include("contactoVista.php")
?>
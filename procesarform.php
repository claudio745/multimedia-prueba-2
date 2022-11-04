<?php
    require_once('conexion.php');
    if (empty($_POST['Nombre']) || empty($_POST['Apellido']) || empty($_POST['Rut']) || empty($_POST['fecha']) || empty($_POST['nacionalidad']) || empty($genero = $_POST['genero1']) || empty($_POST['ciudad'])){
        echo "Por favor llene los campos correspondientes";
    }else{
        $nombres = $_POST['Nombres'];
        $apellidos = $_POST['Apellidos'];
        $rut = $_POST['Rut'];
        $fecha_nacim = $_POST['fecha'];
        $nacionalidad = $_POST['nacionalidad'];
        $genero = $_POST['genero1'];
        $ciudad = $_POST['ciudad'];
        $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    }

    $query = "INSERT INTO  usuarios (nombre, apellido, imagen) VALUES ('$nombre', '$apellido', '$imagen')";
    $resultado = $conexion->query($query);


    








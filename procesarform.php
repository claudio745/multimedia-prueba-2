<?php
    require_once('conexion.php');
    if (empty($_POST['Nombres']) || empty($_POST['Apellidos']) || empty($_POST['Rut']) || empty($_POST['ciudad'])){
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


        $query = "INSERT INTO  datos (nombres, apellidos, rut, fecha_nacim, nacionalidad, genero, ciudad_residencia , foto) VALUES ('$nombres', '$apellidos', '$rut', '$fecha_nacim', '$nacionalidad', '$genero', '$ciudad' , '$foto')";
        $resultado = $conexion->query($query);
    
        if($resultado){
            echo "Se han insertado los datos correctamente";
        }else{
            echo "No se han guardado los datos";
        }
    
    }

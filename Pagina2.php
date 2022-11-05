<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pag.css">
    
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Página 2</title>
</head>
<body>
    <div class="container" style="background-color: gray">
        <div class="container">
            <div class="row" style="height: 100px; background-color: #d9afa2">
            <div class="col d-flex justify-content-center">Menu de navegacion:
                    <a href = "pagina3.php"><button type="button" class="btn btn-link">Inicio</button></a>|
                    <a href = "index.php"><button type="button" class="btn btn-link">Ingresar Persona</button></a>|
                    <a href = "pagina2.php"><button type="button" class="btn btn-link">Lista Persona</button></a>|
                    <a href = "pagina4.php"><button type="button" class="btn btn-link">Estadisticas</button></a>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row" style="height: 600px; background-color: #E3DAC9">
                <div class="col">
                    <?php
                    //Conexion con bd
                    $host = "localhost";
                    $usuario = "root";
                    $pasword = "";
                    $db = "bd_prueba_2";
                    $conexion = mysqli_connect($host, $usuario, $pasword, $db);

                    ?>   
                    <table class="table table-bordered">
                        <tr>
                            <td>Nombres</td>
                            <td>Apellidos</td>
                            <td>rut</td>

                        </tr>

                        <?php
                        //Seleciono todo de la tabla noticia
                        $sql="SELECT nombres, apellidos, rut FROM datos";
                        $result=mysqli_query($conexion, $sql);

                        //ordeno imprimir
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        
                        <tr>
                            <td><?php echo $mostrar['nombres']?></td>
                            <td><?php echo $mostrar['apellidos']?></td>
                            <td><?php echo $mostrar['rut']?></td>
                            <td><a href="pagina3.php"> <button type="button" class="btn btn-info">Ver Perfil</button></a></td>
                            <td><a href=""><button type="button" class="btn btn-danger">Descargar PDF</button></a></td>
                        </tr>

                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row" style="background-color: #B0E0DA">
                <div class="col">Tecnología Multimedia CIF 6459-1</div>
                <div class="col d-flex justify-content-end">Fecha de entrega: 06/11/2022</div>
            </div>
            <div class="row" style="background-color: #B0E0DA">
                <div class="col d-flex justify-content-end">Nombre integrantes: Jose Meza, Claudio Alfaro</div>
            </div>
        </div>
    </div>
</body>
</html>
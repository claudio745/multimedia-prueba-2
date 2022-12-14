<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pdf.css">

    <title>PDF</title>
</head>
<body>
    <div class="cuerpo">
        <div class="arriba">
            <div class="img">
                <img width="150px" height="150px" src="data:foto/jpg;base64,<?php echo base64_encode($mostrar['foto']);?>"/>
            </div>
            <div>
                <h3>Datos:</h3>
                <p>rut: </P>
                <p>Fecha de nacimiento: </p>
            </div>
        </div>
        <br></br>
        <div class="abajo">
            
            <?php
                require 'phpqrcode/qrlib.php';
                $dir = 'temp/';

                if(!file_exists($dir)){
                    mkdir($dir);
                }
                $filename = $dir.'test.png';

                $tamanio = 10;
                $level = 'M';
                $framesize = 3;
                $contenido = 'Hola Mundo';

                QRcode::png($contenido, $filename, $level, $tamanio, $framesize);

                echo '<img src="'.$filename.'"/>';

            ?>
        </div>
        <div class="hora">
            <div id="current_date">
                <script>
                    date = new Date();
                    year = date.getFullYear();
                    month = date.getMonth() + 1;
                    day = date.getDate();
                    hora = date.getHours();
                    minutos = date.getMinutes();
                    segundos = date.getSeconds();
                    document.getElementById("current_date").innerHTML = "Fecha: " + day + " / " + month + " / " + year + " " + "Hora: " + hora + ":" + minutos + ":" + segundos;
                </script>
            </div>
        </div>
    </div>
</body>
</html>
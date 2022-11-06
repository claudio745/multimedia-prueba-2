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
            <div class="img">j</div>
        </div>
        <br></br>
        <div class="abajo"></div>
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
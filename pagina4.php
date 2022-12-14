<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Nacionalidad', 'Usuarios'],
          ['Chileno',    3],
          ['Canadiense', 2],
          ['Uruguaya',   3],
        ]);

        var options = {
          title: 'Estadistica Usuarios'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Vida', 'Edad', { role: 'style' }],
            ['Joven', 16, 'blue'],            
            ['Adulto', 45, 'blue'],            
            ['Adulto mayor', 80, 'blue'],
        ]);

        var options = {'title':'Edad usuarios',
            'width':600,
            'height':300};
        var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
        chart.draw(data, options);
      }
    </script>

    <title>Página 4</title>
</head>
<body>
    <div class="container" style="background-color: gray">
        <div class="container">
            <div class="row" style="height: 100px; background-color: #d9afa2">
                <div class="col mt-4 d-flex justify-content-center">Menu de navegacion:
                    <a href = "pagina3.php"><button type="button" class="btn btn-link">Inicio</button></a>|
                    <a href = "index.php"><button type="button" class="btn btn-link">Ingresar Persona</button></a>|
                    <a href = "pagina2.php"><button type="button" class="btn btn-link">Lista Persona</button></a>|
                    <a href = "pagina4.php"><button type="button" class="btn btn-link">Estadisticas</button></a>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row" style="height: 300px; background-color: #E3DAC9">
                <div class="col d-flex justify-content-center">
                    <div id="piechart" style="width: 600px; height: 300px;"></div> 
                </div>
            </div>
            <div class="row mt-4" style="height: 300px; background-color: #E3DAC9">
                <div class="col d-flex justify-content-center">
                    <div id="chart_div"></div>
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
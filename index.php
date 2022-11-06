<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Página 1</title>
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
            <div class="row" style="height: 750px; background-color: #E3DAC9">
                <div class="col-8"> <h3>Formulario</h3>
                    <br>
                    <form  action= "procesarform.php" method= "POST" enctype = "multipart/form-data"> 
                        <label for="Nombres"> Nombres: </label>
                        <input type="text" class="form-control" name="Nombres" id="Nombres">
                        <br><br>
                        <label for="Apellidos"> Apellidos: </label>
                        <input type="text" class="form-control" name="Apellidos" id="Apellidos">
                        <br><br>
                        <label> Rut: </label>
                        <input type="text" class="form-control" name="Rut" id="Rut" placeholder="11111111-1"/>
                        <br><br>
                        <label> Fecha de nacimiento: </label>
                        <input type="date" name="fecha" id="fecha" value="2022-11-04" min="1900-01-01" max="2004-01-01"> 
                        <br><br>
                        <label> Nacionalidad: </label> 
                        <select name="nacionalidad" id="nacionalidad">
                            <option value="Chilena">Chilena</option>
                            <option value="Canadiense">Canadiense</option>
                            <option value="Uruguaya">Uruguaya</option>
                        <br>
                        </select>
                        <br><br>
                        <label> Genero: </label>
                        <select name="genero" id="genero">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        <br>
                        </select>
                        <br><br>
                        <label>Ciudad de residencia: </label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad">
                        <br><br>
                        <label> Foto: </label>
                        <input type = "file" REQUIRED name = "imagen"><br><br>
                        <input type="submit" value="Enviar formulario">
                    </form>
                </div>
                <div class="col-4">LINK</div>
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
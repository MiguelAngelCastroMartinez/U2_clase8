<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Semana 8 Formularios Post</title>
</head>
<body>

<div class="jumbotron text-center bg-info">
  <h1>Semana 8 trabajando formularios con el metodo POST</h1>
  <p>Los formularios permiten diseñar interfaces para que el usuario comparta datos con la aplicacion. En PHP se utilizan metodos para crear la comunicacion entre el cliente y el servidor. 
  Estos metodos son el POST y el GET<p>
</div>

<div class="container">
    <a href="calculadora.php">Ir a Calculadora</a>
    <br/>
    <h3>Formulario PHP con metodo POST</h3>
        <form method= "POST">
            <div class="form-floating mb-3">
                <input type= "text" class="form-control" name="nombre" value=" "/>
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating">
                <input type= "text" class="form-control" name="apellidos" value=" "/>
                <label for="floatingPassword">Apellidos</label>
            </div>
            <p></p>
            <input type= "submit" class="btn btn-primary" value="Envia datos"/>
        </form>

        <br>

        <h2>Resultado</h2>
        <?php
        $nombre = "";
        $apellidos = "";
            if($_POST){
                echo "Alguien dio un post";
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellidos"];
                echo "<p>Hola bienvenido <b>".$nombre." ".$apellido."</b></p>";
            }
        ?>

    <hr>
    <h3>Formulario PHP con metodo POST ejemplo 2</h3>
        <form method= "POST">
        <h6>Formulario opcion 1</h6>
            <div class="form-floating mb-3">
                <input type= "text" class="form-control" name="nom1"/>
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating">
                <input type= "text" class="form-control" name="apell1"/>
                <label for="floatingPassword">Apellidos</label>
            </div>
            <p></p>
            <input type= "submit" class="btn btn-primary" value="Formulario1" name="boton1"/>
        </form>
    <br>
    <h3>Formulario PHP con metodo POST ejemplo 3</h3>
        <form method= "POST">
        <h6>Formulario opcion 2</h6>
            <div class="form-floating mb-3">
                <input type= "text" class="form-control" name="nom2"/>
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating">
                <input type= "text" class="form-control" name="apell2"/>
                <label for="floatingPassword">Apellidos</label>
            </div>
            <p></p>
            <input type= "submit" class="btn btn-primary" value="Formulario2" name="boton1"/>
        </form>

        <br/>

        <h2>Resultado</h2>
        <?php
            if($_POST){
                $boton = "";
                $nom = "";
                $apell = "";

                $boton = $_POST["boton1"];
                if($boton == "Formulario1"){
                    $nom = $_POST["nom1"];
                    $apell = $_POST["apell1"];
                    echo "<p><b>Saludo 1:</b> Hola, ¿Como estas ".$nom." ".$apell."?</p>";
                }

                if($boton == "Formulario2"){
                    $nom = $_POST["nom2"];
                    $apell = $_POST["apell2"];
                    echo "<p><b>Saludo 2:</b> Hola, ¿Como estas ".$nom." ".$apell."?</p>";
                }
            }
        ?>
</div>
</body>
</html>
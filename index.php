<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">QUIZ PHP</a>
  </div>
</nav>
<br>
    <div class="container" id="inicio">
        <div class="row">

            <div class="col-2">
            </div>
            <div class="col-8" id="partida">
            <?php
                include('misfunciones.php');
                //$mysqli guarda la conexión a la BBDD
                $mysqli = conectaBBDD();

                $consulta = $mysqli -> query("SELECT * FROM `preguntas` GROUP BY `tema`");
                $num_filas = $consulta -> num_rows;

                for ($i=0; $i<$num_filas; $i++){
                    $r = $consulta -> fetch_array();
                    ?>
                    <button onclick="cargaTema('<?php echo $r['tema']?>')" type="button" class="btn btn-primary col-12"><?php echo $r['tema']?></button><br><br>
                    <?php
                }

            ?>     
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <button onclick="" type="button" class="btn btn-warning col-12">Inicia Sesión</button>
            </div>
            <div class="col-2"></div>
        </div><br><br>
        <div class="row" id="inicio de sesion">
            <div class="col-2"></div>
            <div class="col-8">
                <input type="input" class="btn btn-warning col-12">Usuario</input>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
<script>
    function cargaTema(_tema){
        $('#partida').load('partida.php', {tema: _tema});
    }
</script>
</body>
</html>
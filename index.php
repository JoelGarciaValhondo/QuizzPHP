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
    <?php
        include('misfunciones.php');
        //mysqli guarda la conexion a la BBDD
        $mysqli = conectaBBDD();

        $consulta = $mysqli -> query("SELECT * FROM preguntas");
        $num_filas = $consulta -> num_rows;

        for($i=0; $i < $num_filas; $i++){
            $r = $consulta -> fetch_array();
            echo $r['enunciado'].'<br>';
        }
    ?>
</body>
</html>
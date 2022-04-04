<?php
    include('misfunciones.php');
    //$mysqli guarda la conexión a la BBDD
    $mysqli = conectaBBDD();

    $respuesta = $_POST['respuesta'];
    $numeroPregunta = $_POST['numeroPregunta'];
    $tema2 = $_POST['tema2'];
    //query mal hecha!! suspenso garantizado xddddd
    //$consulta = $mysqli -> query("SELECT * FROM `preguntas` WHERE `numero` = '$numeroPregunta' ");
    //$r = $consulta -> fetch_array();

    //query correcta
    $consulta = $mysqli -> prepare("SELECT `correcta` FROM `preguntas` WHERE `numero` = ? ");
    $consulta -> bind_param("s", $numeroPregunta);
    $consulta -> execute();
    $consulta -> store_result();
    $consulta -> bind_result($correcta);
    $consulta -> fetch();

    ?>
    <br><br>
    <button onclick="vueltaInicio()" type="button" class="btn btn-primary col-12">Volver al inicio</button>
    <?php
    
    if($correcta == $respuesta){
        //echo "acertaste!!";
        ?>
        <br><br>
        <button onclick="vueltaTest('<?php echo $tema2; ?>')" type="button" class="btn btn-primary col-12">CORRECTO! -> Siguiente Pregunta de <?php echo $tema2 ?></button>
        <?php
    }

?>
<script>
    function vueltaTest(tema2){
        $('#partida').load('partida.php', {tema:tema2});
    }
</script>
<script>
    function vueltaInicio(){
        $('#inicio').load('index.php');
    }
</script>
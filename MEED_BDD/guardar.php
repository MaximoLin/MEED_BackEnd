<?php

include ("conexion.php")

if (isset($_POST['guardar'])) {
    if (strlen($_POST['pregunta1']) >= 1 && strlen($_POST['pregunta2']) >= 1 && strlen($_POST['pregunta3']) < 1 && strlen($_POST['pregunta4']) < 1) {
        $pregunta1 = trim($_POST['pregunta1']);
        $pregunta2 = trim($_POST['pregunta2']);
        $pregunta3 = trim($_POST['pregunta3']);
        $pregunta4 = trim($_POST['pregunta4']);
        $consulta = INSERT INTO test_table('pregunta1', 'pregunta2', 'pregunta3', 'pregunta4') VALUES ('$pregunta1','$pregunta2','$pregunta3','$pregunta4');
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3>Se guardaron los datos!</h3>
            <?php
        }
        else
        {
            ?>
            <h3>No se pudieron guardar los datos!</h3>
            <?php
        }
    }
    else
    {
        ?>
        <h3>Por favor completa todos los campos!</h3>
        <?php
    }
}

?>
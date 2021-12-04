<?php

include ("conexion.php");

if (isset($_POST['submit1'])) {
    if (strlen($_POST['pr']) >= 1 && strlen($_POST['r1']) >= 1 && strlen($_POST['r2']) >= 1 && strlen($_POST['r3']) >= 1 && strlen($_POST['r4'])) {
        $nro = 0;
        $pr = trim($_POST['pr']);
        $r1 = trim($_POST['r1']);
        $r2 = trim($_POST['r2']);
        $r3 = trim($_POST['r3']);
        $r4 = trim($_POST['r4']);
        $consulta = "INSERT INTO `pr1`(`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES ('$nro','$pr','$r1','$r2','$r3','$r4')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3>¡Se guardaron los datos de la pregunta!</h3>
            <?php
            $nro++;
        }
        else
        {
            ?>
            <h3>¡No se pudieron guardar los datos de la pregunta!</h3>
            <?php
        }
    }
    else
    {
        ?>
        <h3>¡Por favor completa todos los campos!</h3>
        <?php
    }

}
/*
if (isset($_POST['submit2'])) {
    if (strlen($_POST['pr']) >= 1 && strlen($_POST['r1']) >= 1 && strlen($_POST['r2']) >= 1 && strlen($_POST['r3']) >= 1 && strlen($_POST['r4']) >= 1) {
        $pr = trim($_POST['pr']);
        $r1 = trim($_POST['r1']);
        $r2 = trim($_POST['r2']);
        $r3 = trim($_POST['r3']);
        $r4 = trim($_POST['r4']);
        $consulta = "INSERT INTO `pr2`(`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES ('2','$pr','$r1','$r2','$r3','$r4')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3>¡Se guardaron los datos de la segunda pregunta!</h3>
            <?php
        }
        else
        {
            ?>
            <h3>¡No se pudieron guardar los datos de la segunda pregunta!</h3>
            <?php
        }
    }
    else
    {
        ?>
        <h3>¡Por favor completa todos los campos!</h3>
        <?php
    }
}

if (isset($_POST['submit3'])) {
    if (strlen($_POST['pr']) >= 1 && strlen($_POST['r1']) >= 1 && strlen($_POST['r2']) >= 1 && strlen($_POST['r3']) >= 1 && strlen($_POST['r4']) >= 1) {
        $pr = trim($_POST['pr']);
        $r1 = trim($_POST['r1']);
        $r2 = trim($_POST['r2']);
        $r3 = trim($_POST['r3']);
        $r4 = trim($_POST['r4']);
        $consulta = "INSERT INTO `pr3`(`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES ('3','$pr','$r1','$r2','$r3','$r4')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3>¡Se guardaron los datos de la tercera pregunta!</h3>
            <?php
        }
        else
        {
            ?>
            <h3>¡No se pudieron guardar los datos de la tercera pregunta!</h3>
            <?php
        }
    }
    else
    {
        ?>
        <h3>¡Por favor completa todos los campos!</h3>
        <?php
    }
}

if (isset($_POST['submit4'])) {
    if (strlen($_POST['pr']) >= 1 && strlen($_POST['r1']) >= 1 && strlen($_POST['r2']) >= 1 && strlen($_POST['r3']) >= 1 && strlen($_POST['r4']) >= 1) {
        $pr = trim($_POST['pr']);
        $r1 = trim($_POST['r1']);
        $r2 = trim($_POST['r2']);
        $r3 = trim($_POST['r3']);
        $r4 = trim($_POST['r4']);
        $consulta = "INSERT INTO `pr4`(`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES ('4','$pr','$r1','$r2','$r3','$r4')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3>¡Se guardaron los datos de la cuarta pregunta!</h3>
            <?php
        }
        else
        {
            ?>
            <h3>¡No se pudieron guardar los datos de la cuarta pregunta!</h3>
            <?php
        }
    }
    else
    {
        ?>
        <h3>¡Por favor completa todos los campos!</h3>
        <?php
    }
}
*/
?>
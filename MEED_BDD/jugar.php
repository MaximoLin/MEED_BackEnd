<?php

$incluir = include ("conexion.php");

if ($incluir)
{
    $consulta = "SELECT * FROM `pr1`";
    $resultado = mysqli_query ($conexion, $consulta);
    if ($resultado)
    {
        while($row = $resultado->fetch_array())
        {
            $pr = $row['pr'];
            $r1 = $row['r1'];
            $r2 = $row['r2'];
            $r3 = $row['r3'];
            $r4 = $row['r4'];

            ?>

            <div>
                <h3><?php echo $pr; ?></h3>
                <div>
                    <button type="button"><?php echo $r1; ?></button><br>
                    <button type="button"><?php echo $r4; ?></button><br>
                    <button type="button"><?php echo $r3; ?></button><br>
                    <button type="button"><?php echo $r2; ?></button><br>
                </div>
            </div>

            <?php
        }
    }
}

?>

<br><br><br>
<div>
<a href='index.php'><button type="button">Volver a la página principal</button></a>
</div>

<?php

/*
if ($incluir)
{
    $consulta = "SELECT * FROM `pr2`";
    $resultado = mysqli_query ($conexion, $consulta);
    if ($resultado)
    {
        while($row = $resultado->fetch_array())
        {
            $pr = $row['pr'];
            $r1 = $row['r1'];
            $r2 = $row['r2'];
            $r3 = $row['r3'];
            $r4 = $row['r4'];

            ?>

            <div>
                <h3><?php echo $pr; ?></h3>
                <div>
                    <button type="button"><?php echo $r3; ?></button>
                    <button type="button"><?php echo $r2; ?></button>
                    <button type="button"><?php echo $r1; ?></button>
                    <button type="button"><?php echo $r4; ?></button>
                </div>
            </div>

            <?php
        }
    }
}

if ($incluir)
{
    $consulta = "SELECT * FROM `pr3`";
    $resultado = mysqli_query ($conexion, $consulta);
    if ($resultado)
    {
        while($row = $resultado->fetch_array())
        {
            $pr = $row['pr'];
            $r1 = $row['r1'];
            $r2 = $row['r2'];
            $r3 = $row['r3'];
            $r4 = $row['r4'];

            ?>

            <div>
                <h3><?php echo $pr; ?></h3>
                <div>
                    <button type="button"><?php echo $r2; ?></button>
                    <button type="button"><?php echo $r3; ?></button>
                    <button type="button"><?php echo $r4; ?></button>
                    <button type="button"><?php echo $r1; ?></button>
                </div>
            </div>

            <?php
        }
    }
}

if ($incluir)
{
    $consulta = "SELECT * FROM `pr4`";
    $resultado = mysqli_query ($conexion, $consulta);
    if ($resultado)
    {
        while($row = $resultado->fetch_array())
        {
            $pr = $row['pr'];
            $r1 = $row['r1'];
            $r2 = $row['r2'];
            $r3 = $row['r3'];
            $r4 = $row['r4'];

            ?>

            <div>
                <h3><?php echo $pr; ?></h3>
                <div>
                    <button type="button"><?php echo $r4; ?></button>
                    <button type="button"><?php echo $r3; ?></button>
                    <button type="button"><?php echo $r2; ?></button>
                    <button type="button"><?php echo $r1; ?></button>
                </div>
            </div>

            <?php
        }
    }
}
*/
?>
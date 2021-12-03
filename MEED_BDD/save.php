<DOCTYPE html lang=es>
<html>
    <body>      
        <?php

        $host = "localhost";
        $user = "root";
        $clave = "";
        $BDD = "meed_test";
        $conexion = new mysqli($host,$user,$clave,$BDD);

        if($conexion->connect_error)
        {
            die("conexion fallida: " . $conexion->connect_error); 
            //echo "conexion fallida " . mysql_error();
        }
        else
        {
            //echo "Conectado";
        }

        ?>
        <div>
            <form method='POST'>
                <label for="Pregunta1">Pregunta 1:</label>
                <p><input type="text" name="pregunta1"></p>
                <label for="Pregunta2">Pregunta 2:</label>
                <p><input type="text" name="pregunta2"></p>
                <label for="Pregunta2">Pregunta 3:</label>
                <p><input type="text" name="pregunta3"></p>
                <label for="Pregunta2">Pregunta 4:</label>
                <p><input type="text" name="pregunta4"></p>
                <input type="submit" name="guardar" valaue="guardar">
            </form>
        </div>
        <?php
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
                    <h3>¡Se guardaron los datos!</h3>
                    <?php
                }
                else
                {
                    ?>
                    <h3>¡No se pudieron guardar los datos!</h3>
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
        ?>
    </body>
</html>

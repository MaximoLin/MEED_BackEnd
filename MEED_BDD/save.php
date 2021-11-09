<DOCTYPE html>
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
    </body>
</html>

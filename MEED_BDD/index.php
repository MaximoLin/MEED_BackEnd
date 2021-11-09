<DOCTYPE html>
<html>
    <body>
        <?php
        include("guardar.php")
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

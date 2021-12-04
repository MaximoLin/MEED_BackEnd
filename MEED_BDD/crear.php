<DOCTYPE html>
<html>
    <body>
        <div>
            <form method='POST'>
                <label for="Pregunta1">Pregunta 1:</label>
                <p><input type="text" name="pr"></p>
                <label for="option1">Opción 1:</label>
                <p><input type="text" name="r1"></p>
                <label for="option2">Opción 2:</label>
                <p><input type="text" name="r2"></p>
                <label for="option3">Opción 3:</label>
                <p><input type="text" name="r3"></p>
                <label for="option4">Opción 4:</label>
                <p><input type="text" name="r4"></p>
                <label for="option5">Respuesta Correcta:</label>
                <p><input type="text" name="a"></p>
                <input type="submit" name="submit1" valaue="submit1">
            </form>

            <br><br><br>
            <div>
                <a href='index.php'><button type="button">Volver a la página principal</button></a>
            </div>
            
            <!--
            <br><br>
            <form method='POST'>
                <label for="Pregunta2">Pregunta 2:</label>
                <p><input type="text" name="pr"></p>
                <label for="option1">Opción 1:</label>
                <p><input type="text" name="r1"></p>
                <label for="option2">Opción 2:</label>
                <p><input type="text" name="r2"></p>
                <label for="option3">Opción 3:</label>
                <p><input type="text" name="r3"></p>
                <label for="option4">Opción 4:</label>
                <p><input type="text" name="r4"></p>
                <input type="submit" name="submit2" valaue="submit2">
            </form>
            <br><br>
            <form method='POST'>
                <label for="Pregunta3">Pregunta 3:</label>
                <p><input type="text" name="pr"></p>
                <label for="option1">Opción 1:</label>
                <p><input type="text" name="r1"></p>
                <label for="option2">Opción 2:</label>
                <p><input type="text" name="r2"></p>
                <label for="option3">Opción 3:</label>
                <p><input type="text" name="r3"></p>
                <label for="option4">Opción 4:</label>
                <p><input type="text" name="r4"></p>
                <input type="submit" name="submit3" valaue="submit3">
            </form>
            <br><br>
            <form method='POST'>
                <label for="Pregunta4">Pregunta 4:</label>
                <p><input type="text" name="pr"></p>
                <label for="option1">Opción 1:</label>
                <p><input type="text" name="r1"></p>
                <label for="option2">Opción 2:</label>
                <p><input type="text" name="r2"></p>
                <label for="option3">Opción 3:</label>
                <p><input type="text" name="r3"></p>
                <label for="option4">Opción 4:</label>
                <p><input type="text" name="r4"></p>
                <input type="submit" name="submit4" valaue="submit4">
            </form>
            -->
        </div>
        <?php
        include("guardar.php")
        ?>    
    </body>
</html>
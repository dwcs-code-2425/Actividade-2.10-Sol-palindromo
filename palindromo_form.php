<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>¿Es palíndromo?</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <h1>¿Es palíndromo?</h1>
        <form method="post">
            <p>
                <label for="cadena">Introduzca una palabra o frase para comprobar si es palíndromo: </label>
                <input type="text" id="cadena" name="cadena" required size="100">
            </p>
            <p><input type="submit" value="Comprobar">
            </p>

        </form>

        <?php
        require_once 'util_cadenas_enunciado.php';
        
        if(isset($_POST["cadena"])){
            $cadena = $_POST["cadena"];
            if(es_palindromo($cadena)){
               echo "<p class='palindromo'>$cadena es palíndromo</p>";
            }
            else{
                 echo "<p class='no_palindromo'>$cadena NO es palíndromo</p>";
            }
        }
        
        ?>
    </body>
</html>

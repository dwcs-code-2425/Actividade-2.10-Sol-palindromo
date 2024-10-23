<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Palíndromo</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once 'util_cadenas_enunciado.php';

        $array_pruebas = array(
            "abccba",
            "abcba",
            "",
            " 1 ",
            "ab- -ba",
            "dabale arroz a la zorra el abad",
            "No subas,abusón",
            "Adán no cede con Eva y Yavé no cede con nada",
            23832,
            // Negativos
            "ab",
            "abc"
        );
        
        foreach ($array_pruebas as $key => $value) {
            if(es_palindromo($value)){
                echo "<p class='palindromo'>$value es palíndromo</p>";
            }
            else{
                echo "<p class='no_palindromo'>$value NO es palíndromo</p>";
            }
        }
        ?>
    </body>
</html>

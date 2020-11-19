<!DOCTYPE html>

<html lang="pt-br">
    <head>
    <meta charset="UTF-8">

        <title>Celke</title>
    </head>
    <body>
        <?php
        //codigo do projeto
        if (phpversion() >= 7.0):
            echo phpversion() . " - Ola Mundo!";
        else:
            echo phpversion() . " - Necessario atualizar o PHP!";
        endif; 

        echo "<hr>";
        echo ini_get('date.timezone') . "<br>";
        echo date('d/m/Y H:i:s') . "<br>";
        ?>
    </body>
</html>
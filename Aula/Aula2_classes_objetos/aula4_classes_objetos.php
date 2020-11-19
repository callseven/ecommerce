<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        
        <?php
        require "../Aula2_classes_objetos/Usuario.php";
        $usuario = new Usuario();
        echo $usuario->getDadosUser("Cesar", "cesar@celke.com.br");
        ?>
    </body>
</html>
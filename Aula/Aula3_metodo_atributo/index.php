<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Metodos e Atributos</title>
    </head>
    <body>
        
        <?php
        require "./usuario.php";
        $usuario = new Usuario();
        echo $usuario->setUsuario("Cesar", "cesar@celke.com.br");
        echo $usuario->setUsuario2("Cesar2", "cesar@celke.com.br");
        echo $usuario->getUsuario();
        echo $usuario->getUsuario2();
        echo "<br>";

        $usuario->setNota(5, 2);
        echo $usuario->getNota();


        ?>
    </body>
</html>
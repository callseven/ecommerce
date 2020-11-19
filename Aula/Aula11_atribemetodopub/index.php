<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Herença</title>
    </head>
    <body>
        
        <?php
        require './Funcionario.php';
        
        
        $funcionario = new Funcionario();
        $funcionario->setNome("Cesar");

        $funcionario->setSalario(5200);

        echo $funcionario->verSalario();

        
        
        ?>
    </body>
</html>


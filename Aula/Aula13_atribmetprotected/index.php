<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Herença</title>
    </head>
    <body>
        
        <?php
        require './FuncionarioProtected.php';
        require './Bonus.php';
        
        $funcionario = new FuncionarioProtected();
        $funcionario->setNome("Cesar");
        $funcionario->setSalario(7200);
        $funcionario->setBonus(3200);
        echo $funcionario->verSalario();
        echo "<br><hr>";

        $funcionario = new Bonus();
        $funcionario->setNome("Cesar");
        $funcionario->setSalario(5200);
        echo $funcionario->verSalario();
        

        
        ?>
    </body>
</html>


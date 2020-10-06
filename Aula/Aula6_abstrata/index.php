<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Herença</title>
    </head>
    <body>
        
        <?php
        require './Cheque.php';
        
        $cheque = new Cheque(100.10, "Comum");
        
        echo $cheque->verValor();
        ?>
    </body>
</html>

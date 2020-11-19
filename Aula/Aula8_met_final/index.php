<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Herença</title>
    </head>
    <body>
        
        <?php
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';
        
        //$cheque = new Cheque(100.10, "Comum");
        //echo $cheque->verValor();

        $chequeComum = new ChequeComum(100.10, "Comum");
        echo $chequeComum->calcularJuros();
        
        $chequeEspecial = new ChequeEspecial(100.10, "Especial");
        echo $chequeEspecial->calcularJuros();
        ?>
    </body>
</html>

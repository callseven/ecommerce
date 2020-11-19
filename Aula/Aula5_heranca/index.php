<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Herença</title>
    </head>
    <body>
        
        <?php
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';

        $cliente = new Cliente();
        $cliente->setEndereco('Av. Republica Argentina1');
        $cliente->setBairro('Novo Mundo1');
        echo $cliente->verEndereco();

        $clientePf = new ClientePessoaFisica();
        $clientePf->setCpf(54625487598);
        $clientePf->setNome('Cesar');
        $clientePf->setEndereco('Av. Republica Argentina2');
        $clientePf->setBairro('Novo Mundo2');
        echo $clientePf->verEndereco();

        $clientePj = new ClientePessoaJuridica();
        $clientePj->setCnpj("00.000.000/000-00");
        $clientePj->setNomeFantasia('Celke');
        $clientePj->setEndereco('Av. Republica Argentina3');
        $clientePj->setBairro('Novo Mundo3');
        echo $clientePj->verEndereco();
        ?>
    </body>
</html>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        
        <?php
        require './Nota.php';
        $notas = new Nota();
        $notas->setNota("Cesar", "Matematica", 2, 7);
        echo $notas->getNota();

        $notaDois = clone $notas;
        $notaDois->setProva(6);
        $notaDois->setTrabalho(4);
        $notaDois->setDisciplina("Historia");
        echo $notaDois->getNota();
        ?>
    </body>
</html>

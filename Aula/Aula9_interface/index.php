<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Herença</title>
    </head>
    <body>
        
        <?php
        require './Icurso.php';
        require './CursoGraduacao.php';
        require './CursoPosGraduacao.php';
        
        
        //$cheque = new Cheque(100.10, "Comum");
        //echo $cheque->verValor();

        $curso = new CursoGraduacao();
        echo $curso->disciplina("MAtematica");
        echo $curso->professor("Cesar");

        $cursPosGrad = new CursoPosGraduacao();
        echo $cursPosGrad->disciplina("Rede");
        echo $cursPosGrad->professor("Kely");
        
        ?>
    </body>
</html>


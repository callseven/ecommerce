<?php

    echo "<h1>Listar Artigos</h1>";
    //var_dump($this->Dados);

    foreach ($this->Dados['artigos'] as $artigo) {
        extract($artigo);
        echo "ID {$id} <br>";
        echo "Titulo: {$titulo} <br";
        echo "Conteudo: {$conteudo} <br> <hr>";
    }
    

?>

<?php

namespace Sts\Models;

use PDO;

class StsListarBlog {

    public $Resultado;

    public  function listar() {
        //echo "Pesquisa artigos no BD<br>";
        $listarArtigos = new \Sts\Models\Conn();
        //listarArtigos->getConn();

        $limit = 10;
        $result_artigos = "SELECT * FROM artigos LIMIT :limit";
        //echo "$result_artigos";
        //var_dump($result_artigos);
        $resultado_artigos = $listarArtigos->getConn()->prepare($result_artigos);
        $resultado_artigos->bindParam(':limit', $limit, \PDO::PARAM_INT);
        $resultado_artigos->execute();
        //$resultado_artigos->fetch(PDO::FETCH_ASSOC);
        $this->Resultado['artigos'] = $resultado_artigos->fetchAll();

        //var_dump($this->Resultado);
    }
}


?>
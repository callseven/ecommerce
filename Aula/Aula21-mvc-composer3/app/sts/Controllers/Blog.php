<?php

namespace Sts\Controllers;


class Blog {

    public $Dados;

    public function index () {
        //echo "Controller da pagina blog<br>";
    
    
            $listarArtigo = new \Sts\Models\StsListarBlog;
            $this->Dados = $listarArtigo->listar();
            //var_dump($this->Dados);
            $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo", $this->Dados);
            $carregarView->renderizar();

    }    


    

}


?>

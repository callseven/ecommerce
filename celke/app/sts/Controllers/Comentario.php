<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Comentario
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Comentario
{

    private $Dados;

    public function index()
    {
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($this->Dados['CadComent'])) {
            // var_dump($this->Dados);
            unset($this->Dados['CadComent']);
            $cadComent = new \Sts\Models\StsComentarios();
            $cadComent->cadComentario($this->Dados);
            if ($cadComent->getResultado()) {
                $this->Dados['form'] = null;
                $UrlDestino = URL. "artigo/".$this->Dados['slug']."#msg_comentario";
                header("Location: $UrlDestino");
            } else {
                $_SESSION['form'] = $this->Dados;
                $UrlDestino = URL. "artigo/".$this->Dados['slug']."#msg_comentario";
                header("Location: $UrlDestino");
            }            
        }
        // $carregarView = new \Core\ConfigView('sts/Views/contato/contato', $this->Dados);
        // //var_dump($this->Dados);
        // $carregarView->renderizar();
    }

}

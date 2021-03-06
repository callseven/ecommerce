<?php

namespace Sts\Controllers;

use Sts\Models\StsArtProxAnt;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Artigo
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Artigo
{

    private $Dados;
    private $Artigo;

    public function index($Artigo = null)
    {
        $this->Artigo = (string) $Artigo;
        //echo "<br><br><br>{$this->Artigo}";

        $visualizarArt = new \Sts\Models\StsArtigo();
        $this->Dados['sts_artigos'] = $visualizarArt->visualizarArtigo($this->Artigo);


        $listarArtRecente = new \Sts\Models\StsArtRecente();
        $this->Dados['artRecente'] = $listarArtRecente->listarArtRecente();

        $listarArtDestaque = new \Sts\Models\StsArtDestaque();
        $this->Dados['artDestaque'] = $listarArtDestaque->listarArtDestaque();

        $visSobreAutor = new \Sts\Models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $visSobreAutor->sobreAutor();

        if (!empty($this->Dados['sts_artigos'][0])){
        $artProxAnt = new \Sts\Models\StsArtProxAnt();
        $this->Dados['artProximo'] = $artProxAnt->artigoProximo($this->Dados['sts_artigos'][0]['id']);
        $this->Dados['artAnterior'] = $artProxAnt->artigoAnterior($this->Dados['sts_artigos'][0]['id']);
        }//var_dump($this->Dados);


        $carregarView = new \Core\ConfigView('sts/Views/blog/artigo', $this->Dados);
        $carregarView->renderizar();
    }

}

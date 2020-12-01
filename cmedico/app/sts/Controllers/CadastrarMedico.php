<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of CadMedico
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class CadastrarMedico
{

    private $Dados;

    public function index()
    {
        $listarMenu = new \Sts\Models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();

        $listarSeo = new \Sts\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();

        $listar_car = new \Sts\Models\StsCarousel();
        $this->Dados['sts_carousels'] = $listar_car->listar();

        $listar_ser = new \Sts\Models\StsServico();
        $this->Dados['sts_servicos'] = $listar_ser->listar();

        $listar_vid = new \Sts\Models\StsVideo();
        $this->Dados['sts_videos'] = $listar_vid->listar();

        $listar_art_home = new \Sts\Models\StsArtHome();
        $this->Dados['sts_artigos'] = $listar_art_home->listarArtHome();

        $listarMedicos = new \Sts\Models\StsListarMedicos();
        $this->Dados['medicos'] = $listarMedicos->listarMedicos();

        $carregarView = new \Core\ConfigView("sts/Views/medico/cadMedico", $this->Dados);
        $carregarView->renderizar();
    }

}
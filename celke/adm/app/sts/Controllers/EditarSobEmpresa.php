<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of EditarSobEmpresa
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class EditarSobEmpresa {

    private $Dados;

    public function editSobEmpresa() {
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($this->Dados['EditSobEmpresa'])) {
            unset($this->Dados['EditSobEmpresa']);
            $editSobEmpresa = new \App\sts\Models\StsEditarSobEmpresa();
            $editSobEmpresa->altSobEmpresa($this->Dados);
            if ($editSobEmpresa->getResultado()) {
                $UrlDestino = URLADM . 'editar-sob-empresa/edit-sob-empresa';
                header("Location: $UrlDestino");
            } else {
                $this->Dados['form'] = $this->Dados;
                $this->editSobEmpresaViewPriv();
            }
        } else {
            $verSobEmpresa = new \App\sts\Models\StsEditarSobEmpresa();
            $this->Dados['form'] = $verSobEmpresa->verSobEmpresa();
            $this->editSobEmpresaViewPriv();
        }
    }

    private function editSobEmpresaViewPriv() {
        if ($this->Dados['form']) {
            
            $listarMenu = new \App\adms\Models\AdmsMenu();
            $this->Dados['menu'] = $listarMenu->itemMenu();
            
            $carregarView = new \Core\ConfigView("sts/Views/sobEmpresa/editarSobEmpresa", $this->Dados);
            $carregarView->renderizar();
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Formulário para editar os dados do sobre empresa não encontrado!</div>";
            $UrlDestino = URLADM . 'editar-sob-empresa/edit-sob-empresa';
            header("Location: $UrlDestino");
        }
    }

}

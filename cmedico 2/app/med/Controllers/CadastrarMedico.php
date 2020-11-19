<?php

namespace App\med\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of CadastrarMedico
 *
 * @copyright (c) year, Call - MED
 */
class CadastrarMedico
{

    private $Dados;

    public function cadMedico()
    {
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($this->Dados['CadMedico'])) {
            unset($this->Dados['CadMedico']);
            $this->Dados['imagem_nova'] = ($_FILES['imagem_nova'] ? $_FILES['imagem_nova'] : null);
            $cadMedico = new \App\med\Models\MedCadastrarMedico();
            $cadMedico->cadUsuario($this->Dados);
            if ($cadMedico->getResultado()) {
                $UrlDestino = URL . 'medicos/listar';
                header("Location: $UrlDestino");
            } else {
                $this->Dados['form'] = $this->Dados;
                $this->cadUsuarioViewPriv();
            }
        } else {
            $this->cadUsuarioViewPriv();
        }
    }

    private function cadUsuarioViewPriv()
    {
        $listarSelect = new \App\med\Models\MedCadastrarMedico();
        $this->Dados['select'] = $listarSelect->listarCadastrar();
       
        //$botao = ['list_usuario' => ['menu_controller' => 'usuarios', 'menu_metodo' => 'listar']];
        //$listarBotao = new \App\med\Models\MedBotao();
        //$this->Dados['botao'] = $listarBotao->valBotao($botao);
        
        $listarMenu = new \App\med\Models\MedMenu();
        $this->Dados['menu'] = $listarMenu->itemMenu();
        $carregarView = new \Core\ConfigView("med/Views/medicos/cadMedico", $this->Dados);
        $carregarView->renderizar();
    }

}

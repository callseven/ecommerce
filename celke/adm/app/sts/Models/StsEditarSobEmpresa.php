<?php

namespace App\sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsEditarSobEmpresa
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsEditarSobEmpresa
{

    private $Resultado;
    private $Dados;

    function getResultado()
    {
        return $this->Resultado;
    }

    public function verSobEmpresa()
    {
        $verSobEmpresa = new \App\adms\Models\helper\AdmsRead();
        $verSobEmpresa->fullRead("SELECT * FROM sts_sobs_emps
                WHERE id =:id LIMIT :limit", "id=1&limit=1");
        $this->Resultado = $verSobEmpresa->getResultado();
        return $this->Resultado;
    }

    public function altSobEmpresa(array $Dados)
    {
        $this->Dados = $Dados;

        $valCampoVazio = new \App\adms\Models\helper\AdmsCampoVazioComTag;
        $valCampoVazio->validarDados($this->Dados);

        if ($valCampoVazio->getResultado()) {
            $this->updateSobEmpresa();
        } else {
            $this->Resultado = false;
        }
    }

    private function updateSobEmpresa()
    {
        $this->Dados['modified'] = date("Y-m-d H:i:s");
        $upSobEmpresa = new \App\adms\Models\helper\AdmsUpdate();
        $upSobEmpresa->exeUpdate("sts_sobs_emps", $this->Dados, "WHERE id =:id", "id=1");
        if ($upSobEmpresa->getResultado()) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Formulário para editar os dados do vídeo atualizado com sucesso!</div>";
            $this->Resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Formulário para editar os dados do vídeo não foi atualizado!</div>";
            $this->Resultado = false;
        }
    }
    

}

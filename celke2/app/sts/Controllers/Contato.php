<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Contato
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Contato
{

    private $Dados;

    public function index()
    {
        $this->Dados = ['nome' => 'Cesar', 'email' => 'cesar@celke.com.br', 'assunto' => 'teste1', 'mensagem' => 'msg teste 1', 'created' => date('Y-m-d H:i:s')];
        //var_dump($this->Dados);
        $cadContato = new \Sts\Models\StsContato();
        $cadContato->cadContato($this->Dados);
    }

}

<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Sts\Models;

/**
 * Description of StsComentarios
 *
 * @author Celke
 */
class StsComentarios
{
    private $Resultado;
    private $IdArtigo;
    



    public function listComentario($IdArtigo = null)
    {
        
        $this->IdArtigo = (string) $IdArtigo;
        //echo "<br><br><br>" . $this->IdArtigo;
        $listar = new \Sts\Models\helper\StsRead();
        $listar->fullRead('SELECT comt.id, comt.conteudo,
                user.id id_user, user.apelido, user.imagem imagem_user
                FROM sts_comts_artigos comt
                INNER JOIN adms_usuarios user ON user.id=comt.adms_usuario_id
                WHERE comt.sts_artigo_id =:sts_artigo_id AND
                (comt.adms_sit_id =:adms_sit_ida OR comt.adms_sit_id =:adms_sit_idb)
                ORDER BY comt.id DESC', "sts_artigo_id={$this->IdArtigo}&adms_sit_ida=1&adms_sit_idb=3");
        $this->Resultado = $listar->getResultado();
         //var_dump($this->Resultado);
        return $this->Resultado;
    }
}

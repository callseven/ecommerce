<?php

namespace App\Entity;

use App\Db\Database;

class Vaga {

/**
 * Identificador unico da vaga
 * @var integer
 */

public $id;

/**
 *Titulo da vaga
 *@var string 
 */
public $titulo;

/**
 *Descricao da vaga (pode conter html)
 *@var string 
 */
public $descricao;

/**
 *Defini-se a vaga que esta ativa
 *@var string(s/n) 
 */
public $ativo;

/**
 *Data de publicacao da vaga
 *@var string
 */
public $data;

/**
 *Metodo responsavel por cadastrar a nova vaga
 *@return boolean
 */
public function cadastrar()
{
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A VAGA NO BANCO
    $obDatabase = new Database('vagas');
    $obDatabase->insert([
                            'titulo'    => $this->titulo,
                            'descricao' => $this->descricao,
                            'ativo'     => $this->ativo,
                            'data'      => $this->data
                        ]);
    //echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;


    //ATRIBUIR O ID DA VAGA NA INSTANCIA

    //RETORNAR SUCESSO
}

}
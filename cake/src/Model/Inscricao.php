<?php

namespace App\Model;

class Inscricao  {

    public $useTable = 'inscricoes';

    public $order = array('nome' => 'ASC');
    public $cacheQueries = true;
}

?>
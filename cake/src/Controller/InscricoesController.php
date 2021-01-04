<?php

namespace App\Controller;





class InscricoesController extends AppController {
	public $name = 'Inscricoes';
	public $uses = array('Inscricao');

    public function inscrever () {

		if (!empty($this->data) && $this->Inscricao->save($this->data)) {
			$this->redirect('/pages/obrigado');
		}

		}


}

?>
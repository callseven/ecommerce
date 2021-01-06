<?php

App::uses('AppController', 'Controller');





class InscricoesController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');
	
	public $name = 'Inscricoes';
	public $uses = array('Inscricao');

    public function inscrever () {
		// var_dump($this->request->data);
		// die();
		if ($this->request->is('post')) {
            $this->Inscricao->create();
            if ($this->Inscricao->save($this->request->data)) {
                $this->Flash->success(__('Inscrição Cadastrada com Sucesso!'));
                return $this->redirect(array('action' => '../pages/obrigado'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    
		}


}

?>
<?php
App::uses('AppController', 'Controller');

class PalestrasController extends AppController {

	public $scaffold = 'painel';
    public $helpers = array('Html', 'Form');
    
    protected function _isPrefix($prefix) {
        return isset($this->params['prefix']) &&
        $this->params['prefix'] === $prefix;
        }
        public function beforeFilter() {
        if ($this->_isPrefix('painel'))
        $this->layout = 'painel'; // Layout padrão do prefixo
        return parent::beforeFilter();
        }

	public function index() {
		$this->set('palestras', $this->Palestra->find('all'));
	}

	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $palestra = $this->Palestra->findById($id);
        if (!$palestra) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('palestra', $palestra);
    }


	public function add() {
        if ($this->request->is('post')) {
            $this->Palestra->create();
            if ($this->Palestra->save($this->request->data)) {
                $this->Flash->success(__('A Palestra foi Cadastrada com Sucesso!'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Não foi possível cadastrar a Palestra.'));
        }
	}

	public function edit($id = null) {

	if (!$id) {
        throw new NotFoundException(__('Invalido'));
    }

    $palestra = $this->Palestra->findById($id);
    if (!$palestra) {
        throw new NotFoundException(__('Invalido'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Palestra->id = $id;
        if ($this->Palestra->save($this->request->data)) {
            $this->Flash->success(__('Palestra Salva.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Não foi possível salvar.'));
    }

    if (!$this->request->data) {
        $this->request->data = $palestra;
    }
}

public function delete($id) {

if ($this->request->is('get')) {
	throw new MethodNotAllowedException();
}

if ($this->Palestra->delete($id)) {
	$this->Flash->success(
		__('Palestra  deletada.', h($id))
	);
} else {
	$this->Flash->error(
		__('Não foi possível deletar.', h($id))
	);
}

return $this->redirect(array('action' => 'index'));
}

}
?>
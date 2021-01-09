<?php
App::uses('AppController', 'Controller');

class PainelController extends AppController {

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
		$this->layout = 'painelhome'; // Layout padrão do prefixo

		// $this->set('palestras', $this->Palestra->find('all'));
	}





			// var_dump($this->request->data);
			// die();

 }

<?php
App::uses('AppController', 'Controller');

class PalestrantesController extends AppController {
	 public $scaffold = 'painel';
	//  public $scaffold = 'admin';


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
			$this->set('palestrantes', $this->Palestrante->find('all'));
		}

		public function view($id = null) {
			if (!$id) {
				throw new NotFoundException(__('Invalid post'));
			}

			$palestrante = $this->Palestrante->findById($id);
			if (!$palestrante) {
				throw new NotFoundException(__('Invalid post'));
			}
			$this->set('palestrante', $palestrante);
		}

		public function add() {
			if ($this->request->is('post')) {
				$this->Palestrante->create();
				if ($this->Palestrante->save($this->request->data)) {
					$this->Flash->success(__('O Palestrante foi Cadastrado com Sucesso!'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Flash->error(__('Não foi possível cadastrar o Palestrante.'));
			}
		}

		public function edit($id = null) {

			if (!$id) {
				throw new NotFoundException(__('Invalido'));
			}

			$palestrante = $this->Palestrante->findById($id);
			if (!$palestrante) {
				throw new NotFoundException(__('Invalido'));
			}

			if ($this->request->is(array('post', 'put'))) {
				$this->Palestrante->id = $id;
				if ($this->Palestrante->save($this->request->data)) {
					$this->Flash->success(__('Palestrante Salvo.'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Flash->error(__('Não foi possível salvar.'));
			}

			if (!$this->request->data) {
				$this->request->data = $palestrante;
			}
		}

		public function delete($id) {

			if ($this->request->is('get')) {
				throw new MethodNotAllowedException();
			}

			if ($this->Palestrante->delete($id)) {
				$this->Flash->success(
					__('Palestrante  deletado.', h($id))
				);
			} else {
				$this->Flash->error(
					__('Não foi possível deletar.', h($id))
				);
			}

			return $this->redirect(array('action' => 'index'));
			}

	}
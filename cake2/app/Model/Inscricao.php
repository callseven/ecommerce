<?php

App::uses('Model', 'Model');

class Inscricao extends AppModel {

    
	public $useTable = 'inscricoes';
	

	public $validate = array(
		'nome' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'O Nome é obrigatório'
		),
		'email' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notBlank',
				'message' => 'O E-mail é obrigatório',
				'last' => true
			),
			array(
				'rule' => 'email',
				'message' => 'E-mail inválido'
			),
			array(
				'rule' => 'isUnique',
				'message' => 'E-mail já cadastrado'
			)
		),
		'telefone' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notBlank',
				'message' => 'O Telefone é obrigatório',
				'last' => true
			),
			array(
				'rule' => 'numeric',
				'message' => 'Telefone inválido'
			)
		),
		'endereco' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'O Endereço é obrigatório'
		)
	);
}

?>
<?php

namespace App\Model;

class Inscricao  {

    public $name = 'Inscricao';
	public $useTable = 'inscricoes';
	public $cacheQueries = true;
	public $order = array('Inscricao.id' => 'ASC');
	public $displayField = 'nome';
	public $validate = array(
		'nome' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notEmpty',
			'message' => 'O Nome é obrigatório'
		),
		'email' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notEmpty',
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
				'rule' => 'notEmpty',
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
			'rule' => 'notEmpty',
			'message' => 'O Endereço é obrigatório'
		)
	);
}

?>
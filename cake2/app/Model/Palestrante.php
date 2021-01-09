<?php
App::uses('Model', 'Model');

class Palestrante extends AppModel{

	public $order = array('id' => 'ASC');
	public $name = 'Palestrante';
	public $cacheQueries = true;

	public $displayField = 'nome';
	// public $hasMany = 'Palestra';


	public $helpers = array('Html', 'Form');


	public $validate = array(

		'nome' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'O Nome é obrigatório'
		),
		'descricao' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'O Nome é obrigatório'
		),
		'url' => array(
			'allowEmpty' => false,
			'required' => false,
			'rule' => 'url',
			'message' => 'URL não está correto'
		)
	);


	
}
?>
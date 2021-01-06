<?php
App::uses('Model', 'Model');

class Palestrante extends AppModel{

	public $order = array('nome' => 'ASC');
	public $name = 'Palestrante';
	public $cacheQueries = true;

	public $displayField = 'nome';
	public $hasMany = 'Palestra';

	public $validate = array(

		'nome' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'O Nome é obrigatório'
		),
		'nome' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'O Nome é obrigatório'
		),
			'url' => array(
			'allowEmpty' => false,
			'required' => false,
			'rule' => 'notBlank',
			'message' => 'URL não é obrigatório'
		)
	);


	// public function ListaPalestrantes(){
	// 	$params = array(
	// 		'fields' => array('Palestrante.nome', 'Palestrante.descricao', 'Palestrante.site')
	// 	);
	// 	$sql = $this->find('all', $params);

	// 	if(count($sql) > 0){
	// 		return $sql;
	// 	}
	// 	else{
	// 		return false;
	// 	}
	// }


	// public function PegaPalestrante($strPalestrante){
	// 	$params = array(
	// 		'fields' => array('Palestrante.nome', 'Palestrante.descricao', 'Palestrante.site'),
	// 		'conditions' => array( 'Palestrante.slug' => $strPalestrante),
	// 		'limit' => 1

	// 	);

	// 	$sql = $this->find('all', $params);

	// 	if(count($sql) > 0){
	// 		return $sql;
	// 	}
	// 	else{
	// 		return false;
	// 	}
	// }
}
?>
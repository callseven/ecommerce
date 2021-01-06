<?php
App::uses('Model', 'Model');

class Palestra extends AppModel{

	// public $belongsTo = array('Palestrante');

	// public function setPalestraCidade($strCidade){
	// 	$params = array(
	// 		'fields' => array('Palestra.titulo', 'Palestra.data', 'Palestrante.nome', 'Palestrante.site'),
	// 		'conditions' => array( 'Palestra.ativo' => 'T', 'Palestra.cidade' => $strCidade)
	// 	);
	// 	$sql = $this->find('all', $params);

	// 	if(count($sql) > 0){
	// 		return $sql;
	// 	}
	// 	else{
	// 		return false;
	// 	}
	// }

		public $name = 'Palestra';
		public $cacheQueries = true;
		public $order = array('Palestra.id' => 'ASC');
		public $displayField = 'nome';
		public $belongsTo = 'Palestrante';

		public $validate = array(

			'nome' => array(
				array(
					'allowEmpty' => false,
					'required' => true,
					'rule' => 'notBlank',
					'message' => 'Nome é obrigatório',
					'last' => true
				),
				array(
					'rule' => 'isUnique',
					'message' => 'Nome já cadastrado'
				)
			),
			'inicio' => array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notBlank',
				'message' => 'Horario de Inicio é obrigatório'
			),
			'fim' => array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notBlank',
				'message' => 'Horario Final é obrigatório'
			)
		);

	}


?>
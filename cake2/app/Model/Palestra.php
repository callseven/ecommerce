<?php
App::uses('Model', 'Model');

class Palestra extends AppModel{


		public $name = 'Palestra';
		public $cacheQueries = true;
		public $order = array('Palestra.id' => 'ASC');
		public $displayField = 'nome';
		// public $belongsTo = 'Palestrante';

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
			'descricao' => array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notBlank',
				'message' => 'Descricao é obrigatório'
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
<?php
App::uses('AppController', 'Controller');

class PalestrantesController extends AppController {



	public function index(){

		// $palestrantes = $this->Palestrante->ListaPalestrantes();

		// if($palestrantes){
		// 	$this->set('palestrantes', $palestrantes);
		// }
		// else{
		// 	$this->redirect('/');
		// }

		// $palestrantes = $this->Palestrante->find('all');

		// $this->set('palestrantes', $palestrantes);

		// // if($palestrantes){
		// // 	$this->set('palestrantes', $palestrantes);
		// // }
		// // else{
		// // 	$this->redirect('/');
		// // }


	}

	public function view($palestrante){
		$palestrante = $this->Palestrante->PegaPalestrante($palestrante);

		if($palestrante){
			$this->set('palestrante', $palestrante);
		}
		else{
			$this->redirect('/');
		}
	}
}
?>
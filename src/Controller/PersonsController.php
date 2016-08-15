<?php
namespace App\Controller;

use App\Controller\AppController;

class PersonsController extends AppController {
	public function index() {
		$this->set('persons', $this->Persons->find('all'));
	}

	public function add() {
		if ($this->request->is('post')) {
			$person = $this->Persons->newEntity();
			$person = $this->Persons->patchEntity($person, $this->request->data);
			if ($this->Persons->save($person)) {
				return $this->redirect(['action' => 'index']);
			}
		}
	}
}


<?php
App::uses('AppController', 'Controller');
/**
 * Fbas Controller
 *
 * @property Fba $Fba
 */
class FbasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fba->recursive = 0;
		$this->set('fbas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fba->exists($id)) {
			throw new NotFoundException(__('Invalid fba'));
		}
		$options = array('conditions' => array('Fba.' . $this->Fba->primaryKey => $id));
		$this->set('fba', $this->Fba->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fba->create();
			if ($this->Fba->save($this->request->data)) {
				$this->Session->setFlash(__('The fba has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fba could not be saved. Please, try again.'));
			}
		}
		$items = $this->Fba->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fba->exists($id)) {
			throw new NotFoundException(__('Invalid fba'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fba->save($this->request->data)) {
				$this->Session->setFlash(__('The fba has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fba could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fba.' . $this->Fba->primaryKey => $id));
			$this->request->data = $this->Fba->find('first', $options);
		}
		$items = $this->Fba->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fba->id = $id;
		if (!$this->Fba->exists()) {
			throw new NotFoundException(__('Invalid fba'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fba->delete()) {
			$this->Session->setFlash(__('Fba deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fba was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

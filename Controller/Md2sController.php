<?php
App::uses('AppController', 'Controller');
/**
 * Md2s Controller
 *
 * @property Md2 $Md2
 */
class Md2sController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Md2->recursive = 0;
		$this->set('md2s', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Md2->exists($id)) {
			throw new NotFoundException(__('Invalid md2'));
		}
		$options = array('conditions' => array('Md2.' . $this->Md2->primaryKey => $id));
		$this->set('md2', $this->Md2->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Md2->create();
			if ($this->Md2->save($this->request->data)) {
				$this->Session->setFlash(__('The md2 has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The md2 could not be saved. Please, try again.'));
			}
		}
		$items = $this->Md2->Item->find('list');
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
		if (!$this->Md2->exists($id)) {
			throw new NotFoundException(__('Invalid md2'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Md2->save($this->request->data)) {
				$this->Session->setFlash(__('The md2 has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The md2 could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Md2.' . $this->Md2->primaryKey => $id));
			$this->request->data = $this->Md2->find('first', $options);
		}
		$items = $this->Md2->Item->find('list');
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
		$this->Md2->id = $id;
		if (!$this->Md2->exists()) {
			throw new NotFoundException(__('Invalid md2'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Md2->delete()) {
			$this->Session->setFlash(__('Md2 deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Md2 was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

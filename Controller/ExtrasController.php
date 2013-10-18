<?php
App::uses('AppController', 'Controller');
/**
 * Extras Controller
 *
 * @property Extra $Extra
 */
class ExtrasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Extra->recursive = 0;
		$this->set('extras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Extra->exists($id)) {
			throw new NotFoundException(__('Invalid extra'));
		}
		$options = array('conditions' => array('Extra.' . $this->Extra->primaryKey => $id));
		$this->set('extra', $this->Extra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Extra->create();
			if ($this->Extra->save($this->request->data)) {
				$this->Session->setFlash(__('The extra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extra could not be saved. Please, try again.'));
			}
		}
		$items = $this->Extra->Item->find('list');
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
		if (!$this->Extra->exists($id)) {
			throw new NotFoundException(__('Invalid extra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Extra->save($this->request->data)) {
				$this->Session->setFlash(__('The extra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extra could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Extra.' . $this->Extra->primaryKey => $id));
			$this->request->data = $this->Extra->find('first', $options);
		}
		$items = $this->Extra->Item->find('list');
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
		$this->Extra->id = $id;
		if (!$this->Extra->exists()) {
			throw new NotFoundException(__('Invalid extra'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Extra->delete()) {
			$this->Session->setFlash(__('Extra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Extra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

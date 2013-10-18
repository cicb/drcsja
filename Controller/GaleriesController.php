<?php
App::uses('AppController', 'Controller');
/**
 * Galeries Controller
 *
 * @property Galery $Galery
 */
class GaleriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Galery->recursive = 0;
		$this->set('galeries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
		$this->set('galery', $this->Galery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Galery->create();
			if ($this->Galery->save($this->request->data)) {
				$this->Session->setFlash(__('The galery has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galery could not be saved. Please, try again.'));
			}
		}
		$items = $this->Galery->Item->find('list');
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
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Galery->save($this->request->data)) {
				$this->Session->setFlash(__('The galery has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
			$this->request->data = $this->Galery->find('first', $options);
		}
		$items = $this->Galery->Item->find('list');
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
		$this->Galery->id = $id;
		if (!$this->Galery->exists()) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Galery->delete()) {
			$this->Session->setFlash(__('Galery deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Galery was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

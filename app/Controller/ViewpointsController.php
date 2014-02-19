<?php

App::uses('AppController', 'Controller');

/**
 * Viewpoints Controller
 *
 * @package       app.Controller
 * @property Viewpoint $Viewpoint
 * @property PaginatorComponent $Paginator
 */
class ViewpointsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Viewpoint->recursive = 0;
		$this->set('viewpoints', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Viewpoint->exists($id)) {
			throw new NotFoundException(__('Invalid viewpoint'));
		}
		$options = array('conditions' => array('Viewpoint.' . $this->Viewpoint->primaryKey => $id));
		$this->set('viewpoint', $this->Viewpoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Viewpoint->create();
			if ($this->Viewpoint->save($this->request->data)) {
				$this->Session->setFlash(__('The viewpoint has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viewpoint could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Viewpoint->exists($id)) {
			throw new NotFoundException(__('Invalid viewpoint'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Viewpoint->save($this->request->data)) {
				$this->Session->setFlash(__('The viewpoint has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viewpoint could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Viewpoint.' . $this->Viewpoint->primaryKey => $id));
			$this->request->data = $this->Viewpoint->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Viewpoint->id = $id;
		if (!$this->Viewpoint->exists()) {
			throw new NotFoundException(__('Invalid viewpoint'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Viewpoint->delete()) {
			$this->Session->setFlash(__('The viewpoint has been deleted.'));
		} else {
			$this->Session->setFlash(__('The viewpoint could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}

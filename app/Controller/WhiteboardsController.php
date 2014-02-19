<?php

App::uses('AppController', 'Controller');

/**
 * Whiteboards Controller
 *
 * @package       app.Controller
 * @property Whiteboard $Whiteboard
 * @property PaginatorComponent $Paginator
 */
class WhiteboardsController extends AppController {

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
		$this->Whiteboard->recursive = 0;
		$this->set('whiteboards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Whiteboard->exists($id)) {
			throw new NotFoundException(__('Invalid whiteboard'));
		}
		$options = array('conditions' => array('Whiteboard.' . $this->Whiteboard->primaryKey => $id));
		$this->Whiteboard->recursive = 2;
		$whiteboard = $this->Whiteboard->find('first', $options);
		$this->set('whiteboard', $whiteboard);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Whiteboard->create();
			if ($this->Whiteboard->save($this->request->data)) {
				$this->Session->setFlash(__('The whiteboard has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whiteboard could not be saved. Please, try again.'));
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
		if (!$this->Whiteboard->exists($id)) {
			throw new NotFoundException(__('Invalid whiteboard'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Whiteboard->save($this->request->data)) {
				$this->Session->setFlash(__('The whiteboard has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The whiteboard could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Whiteboard.' . $this->Whiteboard->primaryKey => $id));
			$this->request->data = $this->Whiteboard->find('first', $options);
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
		$this->Whiteboard->id = $id;
		if (!$this->Whiteboard->exists()) {
			throw new NotFoundException(__('Invalid whiteboard'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Whiteboard->delete()) {
			$this->Session->setFlash(__('The whiteboard has been deleted.'));
		} else {
			$this->Session->setFlash(__('The whiteboard could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}

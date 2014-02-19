<?php

App::uses('AppController', 'Controller');

/**
 * Tags Controller
 *
 * @package       app.Controller
 * @property Tag $Tag
 * @property PaginatorComponent $Paginator
 */
class TagsController extends AppController {

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
		$this->Tag->recursive = 0;
		$this->set('tags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
		$this->set('tag', $this->Tag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($whiteboardId) {
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved.'));
				return $this->redirect(array('controller' => 'whiteboards', 'action' => 'view', $whiteboardId));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		}
		$whiteboards = $this->Tag->Whiteboard->find('list');
		$viewpoints = $this->Tag->Viewpoint->find('list');
		$this->set(compact('whiteboards', 'viewpoints'));
		$this->set('whiteboardId', $whiteboardId);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$whiteboardId = $this->request->data['Tag']['whiteboard_id'];
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved.'));
				return $this->redirect(array('controller' => 'whiteboards', 'action' => 'view', $whiteboardId));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
			$this->request->data = $this->Tag->find('first', $options);
		}
		$whiteboards = $this->Tag->Whiteboard->find('list');
		$viewpoints = $this->Tag->Viewpoint->find('list');
		$this->set(compact('whiteboards', 'viewpoints'));
		$this->set('whiteboardId', $whiteboardId);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tag->delete()) {
			$this->Session->setFlash(__('The tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}


<?php
App::uses('AppController', 'Controller');

class PuestosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler', 'Session');
	public $helpers = array('Html' , 'Form', 'Time','Js');
	public $paginate = array(
		'limit' => 5,
		'order' => array(
			'Puesto.id' => 'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Puesto->recursive = 0;
		$this->paginate['Puesto']['limit'] =5;
		$this->paginate['Puesto']['order'] = array('Puesto.id' => 'asc');
		$this->set('puestos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Puesto->exists($id)) {
			throw new NotFoundException(__('Puesto no encontrado'));
		}
		$options = array('conditions' => array('Puesto.' . $this->Puesto->primaryKey => $id));
		$this->set('puesto', $this->Puesto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Puesto->create();
			if ($this->Puesto->save($this->request->data)) {
				$this->Session->setFlash('El puesto ha sido Asignado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El puesto no pudo ser asignado, por favor vuelve a intentarlo.',array('class' => 'alert alert-danger'));
			}
		}
		$usuarios = $this->Puesto->Usuario->find('list',array('fields' => array('id', 'nombre_completo')));
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Puesto->exists($id)) {
			throw new NotFoundException(__('Puesto no encontrado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Puesto->save($this->request->data)) {
				$this->Session->setFlash('El puesto ha sido Editado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El puesto no pudo ser asignado, por favor vuelve a intentarlo.', array('class'=> 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Puesto.' . $this->Puesto->primaryKey => $id));
			$this->request->data = $this->Puesto->find('first', $options);
		}
		$usuarios = $this->Puesto->Usuario->find('list', array('fields' => array('id', 'nombre_completo')));
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Puesto->id = $id;
		if (!$this->Puesto->exists()) {
			throw new NotFoundException(__('Puesto no encontrado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Puesto->delete()) {
			$this->Session->setFlash('El puesto ha sido Asignado.', 'default', array('class'=> 'alert alert-success'));
		} else {
			$this->Session->setFlash('El puesto no pudo ser eliminado, por favor vuelve a intentarlo.', array('class'=> 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

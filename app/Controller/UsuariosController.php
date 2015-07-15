

<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler','Session');
	public $helpers = array('Html' , 'Form', 'Time','Js');
public $paginate = array(
		'limit' => 5,
		'order' => array(
			'Usuario.id' => 'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 2;
		$this->paginate['Usuario']['limit'] =5;
		$this->paginate['Usuario']['order'] = array('Usuario.id' => 'asc');
		$this->set('usuarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Usuario no encontrado'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash('El Usuario ha sido Registrado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Usuario no puedo ser Registrado, por favor intentalo nuevamente.', array('class'=> 'alert alert-danger'));
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
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Usuario no encontrado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash('El Usuario ha sido Editado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Usuario no puedo ser Registrado, por favor intentalo nuevamente.', array('class'=> 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Usuario no encontrado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash('El Usuario ha sido Eliminado.', 'default', array('class'=> 'alert alert-success'));
		} else {
			$this->Session->setFlash('El Usuario no puedo ser Eliminado, por favor intentalo nuevamente.', array('class'=> 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

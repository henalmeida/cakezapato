
<?php
App::uses('AppController', 'Controller');
/**
 * Modelos Controller
 *
 * @property Modelo $Modelo
 * @property PaginatorComponent $Paginator
 */
class ModelosController extends AppController {

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
			'Modelo.id' => 'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Modelo->recursive = 0;
		$this->paginate['Modelo']['limit'] =5;
		$this->paginate['Modelo']['order'] = array('Modelo.id' => 'asc');
		$this->set('modelos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Modelo->exists($id)) {
			throw new NotFoundException(__('Modelo no encontrado'));
		}
		$options = array('conditions' => array('Modelo.' . $this->Modelo->primaryKey => $id));
		$this->set('modelo', $this->Modelo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modelo->create();
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash('El modelo ha sido registrado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El modelo no ha sido guardado, por favor intentalo nuevamente', array('class'=> 'alert alert-danger'));
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
		if (!$this->Modelo->exists($id)) {
			throw new NotFoundException(__('Modelo no encontrado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash('El modelo ha sido Editado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El modelo no ha sido guardado, por favor intentalo nuevamente', array('class'=> 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Modelo.' . $this->Modelo->primaryKey => $id));
			$this->request->data = $this->Modelo->find('first', $options);
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
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Modelo no encontrado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Modelo->delete()) {
			$this->Session->setFlash('El modelo ha sido eliminado.', array('class'=> 'alert alert-success'));
		} else {
			$this->Session->setFlash('El modelo no ha sido eliminado, por favor intentalo nuevamente', array('class'=> 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

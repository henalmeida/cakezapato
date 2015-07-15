
<?php
App::uses('AppController', 'Controller');
/**
 * Marcas Controller
 *
 * @property Marca $Marca
 * @property PaginatorComponent $Paginator
 */
class MarcasController extends AppController {

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
			'Marca.id' => 'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Marca->recursive = 0;
		$this->paginate['Marca']['limit'] =5;
		$this->paginate['Marca']['order'] = array('Marca.id' => 'asc');
		$this->set('marcas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Marca->exists($id)) {
			throw new NotFoundException(__('Marca no encontrada'));
		}
		$options = array('conditions' => array('Marca.' . $this->Marca->primaryKey => $id));
		$this->set('marca', $this->Marca->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Marca->create();
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash('La Marca ha sido registrada.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Marca no pudo ser registrada, por favor intentalo nuevamente', array('class'=> 'alert alert-danger'));
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
		if (!$this->Marca->exists($id)) {
			throw new NotFoundException(__('Marca no encontrada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash('La Marca ha sido Editado.', 'default', array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Marca no pudo ser registrada, por favor intentalo nuevamente', array('class'=> 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Marca.' . $this->Marca->primaryKey => $id));
			$this->request->data = $this->Marca->find('first', $options);
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
		$this->Marca->id = $id;
		if (!$this->Marca->exists()) {
			throw new NotFoundException(__('Marca no encontrada'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Marca->delete()) {
			$this->Session->setFlash('Lar Marca ha sido Eliminada', array('class'=> 'alert alert-success'));
		} else {
			$this->Session->setFlash('La Marca no pudo ser eliminada, por favor intentalo nuevamente', array('class'=> 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

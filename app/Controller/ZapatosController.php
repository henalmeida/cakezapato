<?php
App::uses('AppController', 'Controller');
/**
 * Zapatos Controller
 *
 * @property Zapato $Zapato
 * @property PaginatorComponent $Paginator
 */
class ZapatosController extends AppController {

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
			'Zapato.id' => 'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Zapato->recursive = 2;
		$this->paginate['Zapato']['limit'] =5;
		$this->paginate['Zapato']['order'] = array('Zapato.id' => 'asc');
		$this->set('zapatos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zapato->exists($id)) {
			throw new NotFoundException(__('Zapato no encontrado'));
		}
		$options = array('conditions' => array('Zapato.' . $this->Zapato->primaryKey => $id));
		$this->set('zapato', $this->Zapato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zapato->create();
			if ($this->Zapato->save($this->request->data)) {
				$this->Session->setFlash('El Zapato ha sido registrado.', 'default' , array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El zapato no se ha resgistrado, por favot intentalo nuevamente.', array('class'=> 'alert alert-danger'));
			}
		}
		$marcas = $this->Zapato->Marca->find('list');
		$modelos = $this->Zapato->Modelo->find('list',array('fields' => array('id', 'nombre_completo')));
		$this->set(compact('marcas', 'modelos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Zapato->exists($id)) {
			throw new NotFoundException(__('Zapato no encontrado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zapato->save($this->request->data)) {
				$this->Session->setFlash('El zapato ha sido Editado.', 'default' , array('class'=> 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El zapato no se ha resgistrado, por favot intentalo nuevamente.', array('class'=> 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Zapato.' . $this->Zapato->primaryKey => $id));
			$this->request->data = $this->Zapato->find('first', $options);
		}
		$marcas = $this->Zapato->Marca->find('list');
		$modelos = $this->Zapato->Modelo->find('list');
		$this->set(compact('marcas', 'modelos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Zapato->id = $id;
		if (!$this->Zapato->exists()) {
			throw new NotFoundException(__('Zapato no encontrado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zapato->delete()) {
			$this->Session->setFlash('El zapato ha sido eliminado.', 'default', array('class'=> 'alert alert-success'));
		} else {
			$this->Session->setFlash('El zapato no se ha eliminado, por favor intentalo nuevamente.', array('class'=> 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

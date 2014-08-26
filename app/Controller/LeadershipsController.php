<?php
App::uses('AppController', 'Controller');
/**
 * Leaderships Controller
 *
 * @property Leadership $Leadership
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LeadershipsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Leadership->recursive = 0;
		$this->set('leaderships', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Leadership->exists($id)) {
			throw new NotFoundException(__('Invalid leadership'));
		}
		$options = array('conditions' => array('Leadership.' . $this->Leadership->primaryKey => $id));
		$this->set('leadership', $this->Leadership->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Leadership->create();
			if ($this->Leadership->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership could not be saved. Please, try again.'));
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
		if (!$this->Leadership->exists($id)) {
			throw new NotFoundException(__('Invalid leadership'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leadership->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Leadership.' . $this->Leadership->primaryKey => $id));
			$this->request->data = $this->Leadership->find('first', $options);
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
		$this->Leadership->id = $id;
		if (!$this->Leadership->exists()) {
			throw new NotFoundException(__('Invalid leadership'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Leadership->delete()) {
			$this->Session->setFlash(__('The leadership has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leadership could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Leadership->recursive = 0;
		$this->set('leaderships', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Leadership->exists($id)) {
			throw new NotFoundException(__('Invalid leadership'));
		}
		$options = array('conditions' => array('Leadership.' . $this->Leadership->primaryKey => $id));
		$this->set('leadership', $this->Leadership->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Leadership->create();
			if ($this->Leadership->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Leadership->exists($id)) {
			throw new NotFoundException(__('Invalid leadership'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leadership->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Leadership.' . $this->Leadership->primaryKey => $id));
			$this->request->data = $this->Leadership->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Leadership->id = $id;
		if (!$this->Leadership->exists()) {
			throw new NotFoundException(__('Invalid leadership'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Leadership->delete()) {
			$this->Session->setFlash(__('The leadership has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leadership could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    public function admin_status($id = null, $publish = null)
    {
        $leadership = $this->Leadership->findById($id);
        $leadership['Leadership']['publish'] = $publish;
        $this->Leadership->save($leadership);
        if ($publish == 1) {
            echo '<a onclick="state(' . $leadership['Leadership']['id'] . ',1)"><img src="/tone/img/on.png"/>';
        } else {
            echo '<a onclick="state(' . $leadership['Leadership']['id'] . ',0)"><img src="/tone/img/off.png"/>';
        }
        $this->autoRender = false; //  nó không redirect đi đâu cả

    }
}

<?php
App::uses('AppController', 'Controller');
/**
 * LeadershipCategories Controller
 *
 * @property LeadershipCategory $LeadershipCategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LeadershipCategoriesController extends AppController {

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
		$this->LeadershipCategory->recursive = 0;
		$this->set('leadershipCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LeadershipCategory->exists($id)) {
			throw new NotFoundException(__('Invalid leadership category'));
		}
		$options = array('conditions' => array('LeadershipCategory.' . $this->LeadershipCategory->primaryKey => $id));
		$this->set('leadershipCategory', $this->LeadershipCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeadershipCategory->create();
			if ($this->LeadershipCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership category could not be saved. Please, try again.'));
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
		if (!$this->LeadershipCategory->exists($id)) {
			throw new NotFoundException(__('Invalid leadership category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeadershipCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadershipCategory.' . $this->LeadershipCategory->primaryKey => $id));
			$this->request->data = $this->LeadershipCategory->find('first', $options);
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
		$this->LeadershipCategory->id = $id;
		if (!$this->LeadershipCategory->exists()) {
			throw new NotFoundException(__('Invalid leadership category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LeadershipCategory->delete()) {
			$this->Session->setFlash(__('The leadership category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leadership category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LeadershipCategory->recursive = 0;
		$this->set('leadershipCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LeadershipCategory->exists($id)) {
			throw new NotFoundException(__('Invalid leadership category'));
		}
		$options = array('conditions' => array('LeadershipCategory.' . $this->LeadershipCategory->primaryKey => $id));
		$this->set('leadershipCategory', $this->LeadershipCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LeadershipCategory->create();
			if ($this->LeadershipCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership category could not be saved. Please, try again.'));
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
		if (!$this->LeadershipCategory->exists($id)) {
			throw new NotFoundException(__('Invalid leadership category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeadershipCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The leadership category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadership category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadershipCategory.' . $this->LeadershipCategory->primaryKey => $id));
			$this->request->data = $this->LeadershipCategory->find('first', $options);
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
		$this->LeadershipCategory->id = $id;
		if (!$this->LeadershipCategory->exists()) {
			throw new NotFoundException(__('Invalid leadership category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LeadershipCategory->delete()) {
			$this->Session->setFlash(__('The leadership category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leadership category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    public function admin_status($id = null, $publish = null)
    {
        $leadershipCategory = $this->LeadershipCategory->findById($id);
        $leadershipCategory['LeadershipCategory']['publish'] = $publish;
        $this->LeadershipCategory->save($leadershipCategory);
        if ($publish == 1) {
            echo '<a onclick="state(' .  $leadershipCategory['LeadershipCategory']['id'] . ',1)"><img src="/tone/img/on.png"/>';
        } else {
            echo '<a onclick="state(' .  $leadershipCategory['LeadershipCategory']['id'] . ',0)"><img src="/tone/img/off.png"/>';
        }
        $this->autoRender = false; //  nó không redirect đi đâu cả

    }
}

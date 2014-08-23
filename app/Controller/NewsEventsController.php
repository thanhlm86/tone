<?php
App::uses('AppController', 'Controller');
/**
 * NewsEvents Controller
 *
 * @property NewsEvent $NewsEvent
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NewsEventsController extends AppController {
    public $helpers = array('Session', 'Html', 'Form'); //Khai bao dung Helper Session
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

        $this->NewsEvent->recursive = 0;
		$this->set('newsEvents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NewsEvent->exists($id)) {
			throw new NotFoundException(__('Invalid news event'));
		}
		$options = array('conditions' => array('NewsEvent.' . $this->NewsEvent->primaryKey => $id));
		$this->set('newsEvent', $this->NewsEvent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NewsEvent->create();
			if ($this->NewsEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The news event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news event could not be saved. Please, try again.'));
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
		if (!$this->NewsEvent->exists($id)) {
			throw new NotFoundException(__('Invalid news event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NewsEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The news event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NewsEvent.' . $this->NewsEvent->primaryKey => $id));
			$this->request->data = $this->NewsEvent->find('first', $options);
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
		$this->NewsEvent->id = $id;
		if (!$this->NewsEvent->exists()) {
			throw new NotFoundException(__('Invalid news event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NewsEvent->delete()) {
			$this->Session->setFlash(__('The news event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
        $this->Session->write('Config.language', 'eng');
        echo $this->Session->read('Config.language');
        $this->NewsEvent->recursive = 0;
		$this->set('newsEvents', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->NewsEvent->exists($id)) {
			throw new NotFoundException(__('Invalid news event'));
		}
		$options = array('conditions' => array('NewsEvent.' . $this->NewsEvent->primaryKey => $id));
		$this->set('newsEvent', $this->NewsEvent->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->NewsEvent->create();
//            debug($this->request->data);die;
            if ($this->request->data['NewsEvent']['image']['name'] != '') {
                move_uploaded_file($this->request->data['NewsEvent']['image']['tmp_name'], 'img/upload/' . $this->request->data['NewsEvent']['image']['name']);
                $this->request->data['NewsEvent']['image'] = $this->request->data['NewsEvent']['image']['name'];
            } else {
                $this->request->data['NewsEvent']['image'] = '';
            }

			if ($this->NewsEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The news event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news event could not be saved. Please, try again.'));
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
		if (!$this->NewsEvent->exists($id)) {
			throw new NotFoundException(__('Invalid news event'));
		}
		if ($this->request->is(array('post', 'put'))) {
            if ($this->request->data['NewsEvent']['Del'] == 1) {
                if ($this->request->data['NewsEvent']['image']['name'] != '') {
                    $oldImage = 'img/upload/' . $this->request->data['NewsEvent']['hidden'];
                    unlink($oldImage);
                }
                $this->request->data['NewsEvent']['image'] = '';
            }
            if ($this->request->data['NewsEvent']['image'] != null) {
                move_uploaded_file($this->request->data['NewsEvent']['image']['tmp_name'], 'img/upload/' . $this->request->data['NewsEvent']['image']['name']);
                $this->request->data['NewsEvent']['image'] = $this->request->data['NewsEvent']['image']['name'];
//                debug($this->request->data['PhotoGallery']['image']);die;
            }
            if ($this->request->data['NewsEvent']['Del'] == 0 && $this->request->data['NewsEvent']['image'] == null) {
                $this->request->data['NewsEvent']['image'] = $this->request->data['NewsEvent']['hidden'];
            }
			if ($this->NewsEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The news event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NewsEvent.' . $this->NewsEvent->primaryKey => $id));
			$this->request->data = $this->NewsEvent->find('first', $options);
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
		$this->NewsEvent->id = $id;
		if (!$this->NewsEvent->exists()) {
			throw new NotFoundException(__('Invalid news event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NewsEvent->delete()) {
			$this->Session->setFlash(__('The news event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    public function admin_status($id = null, $publish = null)
    {
        $categoryproduct = $this->CategoryProduct->findById($id);
        $categoryproduct['CategoryProduct']['publish'] = $publish;
        $this->CategoryProduct->save($categoryproduct);
        if ($publish == 1) {
            echo '<a onclick="state(' . $categoryproduct['CategoryProduct']['id'] . ',1)"><img src="/tvshopping/img/circle_green.png"/>';
        } else {
            echo '<a onclick="state(' . $categoryproduct['CategoryProduct']['id'] . ',0)"><img src="/tvshopping/img/circle_red.png"/>';
        }
        $this->autoRender = false; //  nó không redirect đi đâu cả

    }
}

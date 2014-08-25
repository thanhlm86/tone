<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mr.Jonn
 * Date: 8/25/14
 * Time: 2:40 PM
 * To change this template use File | Settings | File Templates.
 */
class EquipmentsController extends AppController
{
    public function admin_index()
    {
        $this->paginate = array(
            'limit' => 5
        );
        $equipment = $this->paginate('Equipment');
        $this->set('equipments', $equipment);
    }

    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->Equipment->Create();
            if ($this->Equiment->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your equipment.'));

        }
    }
}
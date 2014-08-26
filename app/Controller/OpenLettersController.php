<?php

class OpenLettersController extends AppController
{


    public function admin_index()
    {
        $openLetter = $this->OpenLetter->find('first');
        if ($this->request->is(array('post', 'put'))) {
            if ($this->OpenLetter->save($this->request->data)) {
                $this->Session->setFlash(__('Your open letter has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your open letter.'));
        }

        if (!$this->request->data) {
            $this->request->data = $openLetter;
        }
    }
}
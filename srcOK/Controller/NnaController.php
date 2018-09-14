<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nna Controller
 *
 * @property \App\Model\Table\NnaTable $Nna
 */
class NnaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $nna = $this->paginate($this->Nna);

        $this->set(compact('nna'));
        $this->set('_serialize', ['nna']);
    }

    /**
     * View method
     *
     * @param string|null $id Nna id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nna = $this->Nna->get($id, [
            'contain' => ['Affairs']
        ]);

        $this->set('nna', $nna);
        $this->set('_serialize', ['nna']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nna = $this->Nna->newEntity();
        if ($this->request->is('post')) {
            $nna = $this->Nna->patchEntity($nna, $this->request->data);
            if ($this->Nna->save($nna)) {
                $this->Flash->success(__('The nna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nna could not be saved. Please, try again.'));
        }
        $this->set(compact('nna'));
        $this->set('_serialize', ['nna']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nna id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nna = $this->Nna->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nna = $this->Nna->patchEntity($nna, $this->request->data);
            if ($this->Nna->save($nna)) {
                $this->Flash->success(__('The nna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nna could not be saved. Please, try again.'));
        }
        $this->set(compact('nna'));
        $this->set('_serialize', ['nna']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nna id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nna = $this->Nna->get($id);
        if ($this->Nna->delete($nna)) {
            $this->Flash->success(__('The nna has been deleted.'));
        } else {
            $this->Flash->error(__('The nna could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

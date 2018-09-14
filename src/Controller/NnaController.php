<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nna Controller
 *
 * @property \App\Model\Table\NnaTable $Nna
 *
 * @method \App\Model\Entity\Nna[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NnaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        // $this->paginate = [
        //     'limit' => '2'
        // ];
        // $nna = $this->paginate($this->Nna);
        // $this->set(compact('nna'));


        $this->set('nna', $this->Nna->find('all'));
    }

    /**
     * View method
     *
     * @param string|null $id Nna id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nna = $this->Nna->find()->where( ['id'=>$id ] )->first();
        $this->set('nna', $nna);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nna = $this->Nna->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['nnasurenames'] = strtoupper($this->request->data['nnasurenames']);
            $this->request->data['nnanames'] = strtoupper($this->request->data['nnanames']);
            $this->request->data['conventionalName'] = strtoupper($this->request->data['conventionalName']);
            $this->request->data['home'] = strtoupper($this->request->data['home']);
            $nna = $this->Nna->patchEntity($nna, $this->request->data);
           
            if ($this->Nna->save($nna)) {
                $this->Flash->success(__('The nna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nna could not be saved. Please, try again.'));
        }
        $this->set(compact('nna'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nna id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nna = $this->Nna->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['nnasurenames'] = strtoupper($this->request->data['nnasurenames']);
            $this->request->data['nnanames'] = strtoupper($this->request->data['nnanames']);
            $this->request->data['conventionalName'] = strtoupper($this->request->data['conventionalName']);
            $this->request->data['home'] = strtoupper($this->request->data['home']);
            $nna = $this->Nna->patchEntity($nna, $this->request->data);

            if ($this->Nna->save($nna)) {
                $this->Flash->success(__('The nna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
           debug($nna->errors());
            $this->Flash->error(__('The nna could not be saved. Please, try again.'));
        }
        $this->set(compact('nna'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nna id.
     * @return \Cake\Http\Response|null Redirects to index.
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

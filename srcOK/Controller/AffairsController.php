<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Affairs Controller
 *
 * @property \App\Model\Table\AffairsTable $Affairs
 */
class AffairsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Nna']
        ];
        $affairs = $this->paginate($this->Affairs);

        $this->set(compact('affairs'));
        $this->set('_serialize', ['affairs']);
    }

    /**
     * View method
     *
     * @param string|null $id Affair id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $affair = $this->Affairs->get($id, [
            'contain' => ['Nna']
        ]);

        $this->set('affair', $affair);
        $this->set('_serialize', ['affair']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affair = $this->Affairs->newEntity();
        if ($this->request->is('post')) {
            $affair = $this->Affairs->patchEntity($affair, $this->request->data);
            if ($this->Affairs->save($affair)) {
                $this->Flash->success(__('The affair has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affair could not be saved. Please, try again.'));
        }
        $nna = $this->Affairs->Nna->find('list', ['limit' => 200]);
        $this->set(compact('affair', 'nna'));
        $this->set('_serialize', ['affair']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Affair id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affair = $this->Affairs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affair = $this->Affairs->patchEntity($affair, $this->request->data);
            if ($this->Affairs->save($affair)) {
                $this->Flash->success(__('The affair has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affair could not be saved. Please, try again.'));
        }
        $nna = $this->Affairs->Nna->find('list', ['limit' => 200]);
        $this->set(compact('affair', 'nna'));
        $this->set('_serialize', ['affair']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Affair id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affair = $this->Affairs->get($id);
        if ($this->Affairs->delete($affair)) {
            $this->Flash->success(__('The affair has been deleted.'));
        } else {
            $this->Flash->error(__('The affair could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

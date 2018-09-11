<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Affairs Controller
 *
 * @property \App\Model\Table\AffairsTable $Affairs
 *
 * @method \App\Model\Entity\Affair[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AffairsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Nna']
        ];
        $affairs = $this->paginate($this->Affairs);

        $this->set(compact('affairs'));
    }

    /**
     * View method
     *
     * @param string|null $id Affair id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $affair = $this->Affairs->get($id, [
        //     'contain' => ['Nna']
        // ]);
        $affair = $this->Affairs->find()->contain( ['Files', 'Nna'] )->Where(['nna_id' => $id])->first();

        $this->set('affair', $affair);
    }

    public function send($nnaId, $option){
        
        if( $option == 'affairs'){
            $affairs = $this->Affairs->find()->Where(['nna_id' => $nnaId])->first();
            if($affairs){
                $this->redirect(['controller' => 'affairs', 'action' => 'view', $nnaId]);
            }else{
                $this->redirect(['controller' => 'affairs', 'action' => 'add', $nnaId]);
            } 
        } elseif($option == 'files'){
            $files = $this->Files->find()->Where(['nna_id' => $nnaId])->first();
            if($files){
                $this->redirect(['controller' => 'affairs', 'action' => 'view', $nnaId]);
            }else{
                $this->redirect(['controller' => 'affairs', 'action' => 'add', $nnaId]);
            } 
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add( $id )
    {
        $affair = $this->Affairs->newEntity();
        if ($this->request->is('post')) {

            $this->request->data['place'] = strtoupper($this->request->data['place']);
            $this->request->data['description'] = strtoupper($this->request->data['description']);

            $affair = $this->Affairs->patchEntity($affair, $this->request->getData());
            //pr($this->request->data()); exit;
            if ($this->Affairs->save($affair)) {

                if (!file_exists(WWW_ROOT . 'files/'.$this->request->data['location'])) {
                    mkdir(WWW_ROOT . 'files/'.$this->request->data['location'], 0775, true);
                } else {exit;}

                $this->Flash->success(__('The affair has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro del caso no se pudo guardar, por favor intente otra vez.'));
        }
        $nna = $this->Affairs->Nna->find()->Where(['id' => $id])->first();

        $this->set(compact('affair', 'nna'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Affair id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affair = $this->Affairs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['place'] = strtoupper($this->request->data['place']);
            $this->request->data['description'] = strtoupper($this->request->data['description']);
            $affair = $this->Affairs->patchEntity($affair, $this->request->getData());
            if ($this->Affairs->save($affair)) {
                $this->Flash->success(__('The affair has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affair could not be saved. Please, try again.'));
        }
        $nna = $this->Affairs->Nna->find('list', ['limit' => 200]);
        $this->set(compact('affair', 'nna'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Affair id.
     * @return \Cake\Http\Response|null Redirects to index.
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

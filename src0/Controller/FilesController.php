<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Files Controller
 *
 * @property \App\Model\Table\FilesTable $Files
 *
 * @method \App\Model\Entity\File[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilesController extends AppController
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
        $files = $this->paginate($this->Files);

        $this->set(compact('files'));
    }

    /**
     * View method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => ['Nna']
        ]);

        $this->set('file', $file);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add( $id = null )
    {
        $file = $this->Files->newEntity();
        if ($this->request->is('post')) {

            
            $document = $this->request->data['fileName'];
            $this->request->data['fileName'] =  $document['name'];

            pr( $document );
            pr( $this->request->data() );
            //exit;
            // CONTROLAR EL TAMA;O DEL DOCMENTO Y SU EXTENSION 
            // GUARDAR LOS ARCHIVOS POR CASOS DIFERENTES
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if($this->Files->save($file)){
                if ( move_uploaded_file($document['tmp_name'], $this->request->data['location'] . $document['name']) ) {
                    $this->Flash->success(__('The file has been saved.'));
                    //exit('ok');
                    return $this->redirect(['controller' => 'files', 'action' => 'index']);
                }
            }

            debug($file->errors());

            $this->Flash->error(__('El registro no se pudo guardar, intente nuevamente.'));
        }

        $nna = $this->Files->Affairs->Nna->find()->where(['id' => $id])->contain(['Affairs'])->first();

        $this->set(compact('file', 'nna'));

    }

    /**
     * Edit method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $nna = $this->Files->Nna->find('list', ['limit' => 200]);
        $this->set(compact('file', 'nna'));
    }

    /**
     * Delete method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $file = $this->Files->get($id);
        if ($this->Files->delete($file)) {
            $this->Flash->success(__('The file has been deleted.'));
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
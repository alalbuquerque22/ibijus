<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locais Controller
 *
 * @property \App\Model\Table\LocaisTable $Locais
 *
 * @method \App\Model\Entity\local[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $locais = $this->paginate($this->Locais);

        $this->set(compact('locais'));
    }

    /**
     * View method
     *
     * @param string|null $id local id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $local = $this->Locais->get($id, [
            'contain' => [],
        ]);

        $this->set('local', $local);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $local = $this->Locais->newEntity();
        if ($this->request->is('post')) {
            $local = $this->Locais->patchEntity($local, $this->request->getData());
            if ($this->Locais->save($local)) {
                $this->Flash->success(__('The local has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The local could not be saved. Please, try again.'));
        }
        $this->set(compact('local'));
    }

    /**
     * Edit method
     *
     * @param string|null $id local id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $local = $this->Locais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $local = $this->Locais->patchEntity($local, $this->request->getData());
            if ($this->Locais->save($local)) {
                $this->Flash->success(__('The local has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The local could not be saved. Please, try again.'));
        }
        $this->set(compact('local'));
    }

    /**
     * Delete method
     *
     * @param string|null $id local id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $local = $this->Locais->get($id);
        if ($this->Locais->delete($local)) {
            $this->Flash->success(__('The local has been deleted.'));
        } else {
            $this->Flash->error(__('The local could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

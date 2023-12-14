<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Imenik Controller
 *
 * @property \App\Model\Table\ImenikTable $Imenik
 */
class ImenikController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Imenik->find();
        $imenik = $this->paginate($query);

        $this->set(compact('imenik'));
    }

    /**
     * View method
     *
     * @param string|null $id Imenik id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imenik = $this->Imenik->get($id, contain: []);
        $this->set(compact('imenik'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imenik = $this->Imenik->newEmptyEntity();
        if ($this->request->is('post')) {
            $imenik = $this->Imenik->patchEntity($imenik, $this->request->getData());
            if ($this->Imenik->save($imenik)) {
                $this->Flash->success(__('The imenik has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imenik could not be saved. Please, try again.'));
        }
        $this->set(compact('imenik'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Imenik id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imenik = $this->Imenik->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imenik = $this->Imenik->patchEntity($imenik, $this->request->getData());
            if ($this->Imenik->save($imenik)) {
                $this->Flash->success(__('The imenik has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imenik could not be saved. Please, try again.'));
        }
        $this->set(compact('imenik'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Imenik id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imenik = $this->Imenik->get($id);
        if ($this->Imenik->delete($imenik)) {
            $this->Flash->success(__('The imenik has been deleted.'));
        } else {
            $this->Flash->error(__('The imenik could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

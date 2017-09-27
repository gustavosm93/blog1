<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuthorsPosts Controller
 *
 * @property \App\Model\Table\AuthorsPostsTable $AuthorsPosts
 *
 * @method \App\Model\Entity\AuthorsPost[] paginate($object = null, array $settings = [])
 */
class AuthorsPostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $authorsPosts = $this->paginate($this->AuthorsPosts);

        $this->set(compact('authorsPosts'));
        $this->set('_serialize', ['authorsPosts']);
    }

    /**
     * View method
     *
     * @param string|null $id Authors Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorsPost = $this->AuthorsPosts->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('authorsPost', $authorsPost);
        $this->set('_serialize', ['authorsPost']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorsPost = $this->AuthorsPosts->newEntity();
        if ($this->request->is('post')) {
            $authorsPost = $this->AuthorsPosts->patchEntity($authorsPost, $this->request->getData());
            if ($this->AuthorsPosts->save($authorsPost)) {
                $this->Flash->success(__('Autor salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Autor não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('authorsPost'));
        $this->set('_serialize', ['authorsPost']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Authors Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorsPost = $this->AuthorsPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorsPost = $this->AuthorsPosts->patchEntity($authorsPost, $this->request->getData());
            if ($this->AuthorsPosts->save($authorsPost)) {
                $this->Flash->success(__('O Autor foi alterado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Autor não pode ser alterado. Por favor, tente novamente.'));
        }
        $this->set(compact('authorsPost'));
        $this->set('_serialize', ['authorsPost']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Authors Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorsPost = $this->AuthorsPosts->get($id);
        if ($this->AuthorsPosts->delete($authorsPost)) {
            $this->Flash->success(__('O Autor foi excluido.'));
        } else {
            $this->Flash->error(__('O Autor não pode ser excluido. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

class TagsController extends AppController
{

    public function index()
    {
        $this->set('tags', $this->paginate($this->Tags));
        $this->set('_serialize', ['tags']);
    }

    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => ['Bookmarks']
        ]);
        $this->set('tag', $tag);
        $this->set('_serialize', ['tag']);
    }

    public function add()
    {
        $tag = $this->Tags->newEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('The tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tag could not be saved. Please, try again.'));
            }
        }
        $bookmarks = $this->Tags->Bookmarks->find('list', ['limit' => 200]);
        $this->set(compact('tag', 'bookmarks'));
        $this->set('_serialize', ['tag']);
    }
}

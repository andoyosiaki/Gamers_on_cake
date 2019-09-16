<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
  public $paginate = [
    'limit' => 10,
    'order' => [
    'post_id' => 'desc'
  ]
  ];


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
      $this->loadModel('Posts');

      $userid = $this->Session->read('userid');
      $this->set(compact('userid'));

        $this->set('posts',$this->paginate());
    }


    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);


        $userid = $this->Session->read('userid');
        $usericon = $this->Session->read('usericon');
        $username = $this->Session->read('username');
        $this->set(compact('userid','usericon','username'));


        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success('変更完了しました');
                $userid = $this->Session->read('userid');
                return $this->redirect(['controller'=>'Games','action' => 'view',$userid]);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $this->set(compact('post'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      $this->request->allowMethod(['post', 'delete']);

        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success('削除されました。');
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }
        $userid = $this->Session->read('userid');
        return $this->redirect(['controller'=>'Games','action' => 'view',$userid]);
    }



    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['index']);
    }

    public function isAuthorized($user = null)
    {
      $action = $this->request->getParam(['action']);

        if(in_array($action,['index','edit','delete'])){
        return true;
      }

      if($user['role'] === 'user'){
        return true;
      }
    }
}

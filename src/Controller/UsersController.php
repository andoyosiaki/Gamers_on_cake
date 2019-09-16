<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    protected function _setPassword($password)
    {
      return (new DefaultPasswordHasher)->hash($password);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));

        $userid = $this->Session->read('userid');
        $this->set(compact('userid'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('登録完了しました。');
                return $this->redirect(['controller'=>'Users','action' => 'login']);
            }
            $this->Flash->error('登録に失敗しました。');
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function login(){
      if($this->request->isPost()){
        $user = $this->Auth->identify();
        if(!empty($user)){
          $this->Auth->setUser($user);

          $this->Session->write(['userid' => $user['post_id'],'authoricon' =>$user['icon'],'authorname'=>$user['username']]);
          $userid = $this->Session->read('userid');
          $authoricon = $this->Session->read('authoricon');
          $authorname = $this->Session->read('authorname');
          $this->set(compact('userid'));

          return $this->redirect($this->Auth->redirectUrl());

        }else {
          $this->Flash->error('ユーザー名かパスワードが間違っています');
        }

      }
    }

    public function logout()
    {
    $this->request->getSession()->destroy();
    return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['login','add']);
    }

    public function isAuthorized($user = null)
    {
      $action = $this->request->getParam(['action']);

      if(in_array($action,['/','logout'])){
      return true;
      }

      if($user['role'] === 'user'){
        return false;
      }

      if(in_array($action,['/'])){
        return true;
      }

      if($user['role'] === 'admin'){
        return true;
      }

    }
}

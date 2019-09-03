<?php

namespace App\Controller;


use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Validation\Validator;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostTable post
 *
 * @method \App\Model\Entity\Onsen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GamesController extends AppController
{

  public function index()
  {
    $this->viewBuilder()->setLayout('my_layout');
    $userid = $this->Session->read('userid');
    $this->set(compact('userid'));

    if($this->request->is('post')){
      $data = $this->request->getData('title');
      if(mb_strlen($data) > 1 && strlen($data) > 1){
        $title = str_replace([" ", "　"], "" , $data);
        $url = file_get_contents('https://app.rakuten.co.jp/services/api/BooksGame/Search/20170404?format=json&title='.$title.'&applicationId='.ACOUNT_ID);
        $json = json_decode($url,true);
        $n = count($json['Items']);
        if($n === 0){
          $this->Flash->error('0です');
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->success('検索結果は'.$n.'件です');
        $this->set(compact('json','n'));
      }else {
        $this->Flash->error('入力エラーです');
      }
    }

  }

  public function add()
  {
    $this->viewBuilder()->setLayout('my_layout');

    $this->loadModel('Posts');

    $userid = $this->Session->read('userid');
    $authoricon = $this->Session->read('authoricon');
    $authorname = $this->Session->read('authorname');
    $this->set(compact('userid','authoricon','authorname'));

    if($this->request->is('post')){

      $datas = $this->request->getData();
      $this->set(compact('datas'));
      $this->loadModel('Posts');

      $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $this->Posts->patchEntity($post, $this->request->getData());
          if ($this->Posts->save($post)) {
            $this->Flash->success('登録完了です');
            return $this->redirect(['controller' => 'posts','action' => 'index']);
          }
      }
    }else {
      return $this->redirect(['action' => 'index']);
    }
  }

  public function view($id = null)
  {
    $this->loadModel('Posts');

      $userposts = $this->Posts->find()->where(['author'=>$id]);
      $this->set(compact('userposts'));
      $userid = $this->Session->read('userid');
      $this->set(compact('userid'));
  }

  public function isAuthorized($user = null)
  {
    $action = $this->request->getParam(['action']);

      if(in_array($action,['index','add'])){
      return true;
    }

    if($user['role'] === 'user'){
      return true;
    }
  }
}

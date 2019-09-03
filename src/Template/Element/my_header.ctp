<header class="HeaderSection">
  <div class="HeaderSection_Box">
    <h1 class="HeaderSection_Title"><?= $this->Html->link('Gamers',['controller' => 'Posts','action' => 'index']) ?></h1>
    <div class="HeaderSection_BtnBox">
      <?php if(!isset($userid)){ echo $this->Html->link('会員登録',['controller' => 'Users','action' => 'add'],['class'=>'HeaderBtn','id'=>'register']);} ?>
      <?php if(!isset($userid)){ echo $this->Html->link('ログイン',['controller' => 'Users','action' => 'login'],['class'=>'HeaderBtn','id'=>'login']);} ?>
      <?php if(isset($userid)){ echo $this->Html->link('投稿画面',['controller' => 'Games','action' => 'index'],['class'=>'HeaderBtn','id'=>'post']);} ?>
      <?php if(isset($userid)){ echo $this->Html->link('マイページ',['controller' => 'games','action'=>'view',$userid],['class'=>'HeaderBtn','id'=>'mypage']);} ?>
      <?php if(isset($userid)){ echo $this->Html->link('ログアウト',['controller' => 'Users','action' => 'logout'],['class'=>'HeaderBtn','id'=>'logout']);} ?>
    </div>
  </div>
</header>

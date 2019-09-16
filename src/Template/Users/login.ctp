 <?= $this->Flash->render() ?>
<div class="UserInsertBox">
  <div class="Wrap_SectionDesc">
    <p class="SectionDesc">ログイン</p>
  </div>
   <p class='ProcedureInt'>①</p>
   <div class="UserInsertBox_Extend_Attension">
     <p class='UserInsertBox_Extend_uncer'>アカウントとパスワードを入力してください</p>
   </div>
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create() ?>
  <div class="UserInsertBox_Input">
    <?= $this->Form->control('username',['placeholder'=>'アカウント名','class'=>'ExtendInputText reset','label'=>false]) ?>
    <?= $this->Form->control('password',['placeholder'=>'パスワード','class'=>'ExtendInputText reset','label'=>false]) ?>
    <?= $this->Form->hidden('user') ?>
  </div>
  <?= $this->Form->button('送信',['class'=>'button reset']) ?>
  <?= $this->Form->end() ?>
</div>

<div class="UserInsertBox">
  <div class="Wrap_SectionDesc">
  <p class="SectionDesc">会員登録</p>
  </div>
  <p class='ProcedureInt'>①</p>
  <div class="UserInsertBox_Extend_Attension">
    <p class='UserInsertBox_Extend_uncer'>アカウントとパスワードを入力してください</p>
  </div>
  <?= $this->Form->create($user) ?>
  <div class="UserInsertBox_Input">
  <?= $this->Form->control('username',['placeholder'=>'アカウント名','class'=>'ExtendInputText reset','label'=>false]) ?>
  <?= $this->Form->control('password',['placeholder'=>'パスワード','class'=>'ExtendInputText reset','label'=>false]) ?>
  </div>
  <div class="WrapIconBox">
    <p class="ProcedureInt">②</p>
    <div class="Attension">
      <p class='uncer'>アイコンを選んでください</p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('0.png'); ?></p>
<<<<<<< HEAD
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['0' => ''],'checked' => true,'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('1.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['1' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('2.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['2' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('3.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['3' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('4.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['4' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
=======
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['0' => ''],'checked' => true,'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('1.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['1' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('2.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['2' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('3.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['3' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('4.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['4' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
>>>>>>> origin/master
    </div>
  </div>
  <div class="WrapIconBox">
    <div class="IconBox">
      <p><?= $this->Html->image('5.png'); ?></p>
<<<<<<< HEAD
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['5' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('6.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['6' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('7.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['7' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('8.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['8' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('9.png'); ?></p>
      <p><?php echo $this->Form->input('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['9' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
=======
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['5' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('6.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['6' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('7.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['7' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('8.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['8' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
    </div>
    <div class="IconBox">
      <p><?= $this->Html->image('9.png'); ?></p>
      <p><?php echo $this->Form->control('icon', ['type' => 'radio', 'name' => 'icon', 'options' => ['9' => ''], 'label' => false, 'hiddenField' => false]); ?> </p>
>>>>>>> origin/master
    </div>
  </div>
  <?= $this->Form->hidden('role',['value'=>'user']) ?>
  <?= $this->Form->button('送信',['class'=>'button reset']) ?>
  <?= $this->Form->end() ?>
</div>

 <div class="SerchFormBox">
   <div class="SerchForm">
     <div class="SerchForm_Extend_Attension">
       <p class='SerchForm_Extend_uncer'>ゲームのタイトルを入力してください</p>
     </div>
   <?= $this->Form->create('null',['type'=>'post','url'=>['controller'=>'games','action'=>'index']]); ?>
   <?= $this->Form->control('title',['class' => 'inputtext rest','label'=>false]); ?>
   <?= $this->Form->submit('送信',['class' => 'button reset']); ?>
   <?= $this->Form->end(); ?>
   </div>
 </div>
 <?= $this->Flash->render() ?>
<div class="ItemResultBox" >
  <article class="ItemResultBox_Article">
  <?php if(empty($n)): ?>
    <p> </p>
  <?php elseif($n !== 0): ?>
    <?php for ($i=0; $i < $n; $i++): ?>
    <div class="ItemResultBox_Loop">
      <p class='Items ItemTitle'><?= $title = $json['Items'][$i]['Item']['title']; ?></p>
      <p class="Items ItemHardware"><?= $hardware = $json['Items'][$i]['Item']['hardware']; ?></p>
      <div class="ItemResultBox_ImageBox">
      <?php $images = $this->element('functions', ["imgsouce" => $json['Items'][$i]['Item']['largeImageUrl']]); ?>
        <a href="<?= $itemUrl = $json['Items'][$i]['Item']['itemUrl'] ?>" target="_blank"><?= $images; ?></a>
      </div>
      <div class="ItemResultBox_ChoiceForm">
        <?= $this->Form->create('null',['type'=>'post','url'=>['controller'=>'games','action'=>'add']]); ?>
        <?= $this->Form->hidden('title',['value'=> $title]); ?>
        <?= $this->Form->hidden('hardware',['value'=> $hardware]); ?>
        <?= $this->Form->hidden('itemurl',['value'=> $itemUrl]); ?>
        <?= $this->Form->hidden('image',['value'=> $images]); ?>
        <?= $this->Form->hidden('author',['value'=> $userid]); ?>
        <?= $this->Form->hidden('protoimage',['value'=> $json['Items'][$i]['Item']['largeImageUrl']]); ?>
        <?= $this->Form->submit('これを紹介する',['class' => 'button reset']); ?>
        <?= $this->Form->end(); ?>
      </div>
    </div>
    <?php endfor; ?>
  <?php endif; ?>
  </article>
</div>

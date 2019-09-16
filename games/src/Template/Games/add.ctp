<?= $this->Flash->render() ?>
<article class="ItemResultBox_Article">
<div class="ItemResultBox_Loop">
  <p class='Items ItemTitle'><?= $datas['title']; ?></p>
  <p class="Items ItemHardware"><?= $datas['hardware']; ?></p>
  <div class="ItemResultBox_ImageBox">
  <?= $datas['image']; ?>
  </div>
  <div class="ItemResultBox_ChoiceForm">
    <div class="IntoroductionForm">
    <?= $this->Form->create(); ?>
    <?= $this->Form->hidden('title',['value' => $datas['title']]); ?>
    <?= $this->Form->hidden('hardware',['value' => $datas['hardware']]); ?>
    <?= $this->Form->hidden('itemurl',['value' => $datas['itemurl']]); ?>
    <?= $this->Form->hidden('image',['value' => $datas['image']]); ?>
    <?= $this->Form->hidden('author',['value' => $userid]); ?>
    <?= $this->Form->hidden('authoricon',['value' => $authoricon]); ?>
    <?= $this->Form->hidden('authorname',['value' => $authorname]); ?>
    <div class="textareas">
    <?= $this->Form->textarea('texts',['placeholder'=>'このゲームの感想やオススメポイントはどこですか？']); ?>
    </div>
    <?= $this->Form->submit('送信',['class' => 'ItemResultbutton','id' => 'ItemResultbutton']); ?>
    <?= $this->Form->end(); ?>
    </div>
  </div>
</div>
</article>

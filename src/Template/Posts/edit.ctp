<div class="ItemListSection">
  <article class="ItemListSection_Article">
    <div class="ItemListSection_Title_Hard_box">
      <p class="Items ItemHardware"><?= $post->hardware; ?></p>
      <h2 class="Items ItemTitle"><?= $post->title; ?></h2>
    </div>
    <div class="ItemListSection_Texts_Image_Box">
      <div class="ItemListSection_Image_Box">
        <?= $post->image; ?>
      </div>
      <div class="ItemListSection_Texts_Auth_Box">
        <div class="ItemListSection_Auth">
          <p class='ItemListSection_Image'><?= $this->Html->image($post->authoricon.'.png'); ?></p>
          <p class='ItemListSection_Username'><?= $post->authorname; ?></p>
        </div>
        <div class="ItemListSection_Texts">
          <p class='Text'><?= nl2br(h($post->texts)); ?></p>
        </div>
      </div>
    </div>
    <div class="ItemListSection_TinkerBox">
      <div class="ItemListSection_ItemDetailBtn">
      <?= $this->Html->link('詳細をみる',$post->itemurl,['class' =>'ItemListSection_ItemDetail']) ?>
      </div>
    </div>
  </article>
</div>
<div class="ItemResultBox_ChoiceForm">
  <div class="IntoroductionForm">
  <?= $this->Form->create(); ?>
  <div class="textareas">
  <?= $this->Form->textarea('texts',['placeholder'=>'このゲームの感想やオススメポイントはどこですか？']); ?>
  </div>
  <?= $this->Form->submit('送信',['class' => 'ItemResultbutton','id' => 'ItemResultbutton']); ?>
  <?= $this->Form->end(); ?>
  </div>
</div>
</div>

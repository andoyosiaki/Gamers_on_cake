<?= $this->Flash->render() ?>
<?php foreach ($userposts as $userposts): ?>
<div class="ItemListSection">
  <article class="ItemListSection_Article">
    <div class="ItemListSection_Title_Hard_box">
      <p class="Items ItemHardware"><?= $userposts->hardware; ?></p>
      <h2 class="Items ItemTitle"><?= $userposts->title; ?></h2>
    </div>
    <div class="ItemListSection_Texts_Image_Box">
      <div class="ItemListSection_Image_Box">
        <?= $userposts->image; ?>
      </div>
      <div class="ItemListSection_Texts_Auth_Box">
        <div class="ItemListSection_Auth">
          <p class='ItemListSection_Image'><?= $this->Html->image($userposts->authoricon.'.png'); ?></p>
          <p class='ItemListSection_Username'><?= $userposts->authorname; ?></p>
        </div>
        <div class="ItemListSection_Texts">
          <p class='Text'><?= nl2br(h($userposts->texts)); ?></p>
        </div>
      </div>
    </div>
    <div class="ItemListSection_TinkerBox">
      <div class="ItemListSection_ItemDetailBtn">
      <?= $this->Html->link('詳細をみる',$userposts->itemurl,['class' =>'ItemListSection_ItemDetail']) ?>
      </div>
      <div class="ItemListSection_Delete_Edit">
      <?php if($userid == $userposts->author){ echo $this->Html->link('編集する',['controller'=>'posts','action' => 'edit',$userposts->post_id],['class' => 'ItemListSection_Edit']);} ?>
      <?php if($userid == $userposts->author){ echo $this->Form->postLink('削除する',['controller'=>'posts','action' => 'delete',$userposts->post_id],['class' => 'ItemListSection_Delete']);}; ?>
      </div>
    </div>
  </article>
</div>
<?php endforeach; ?>

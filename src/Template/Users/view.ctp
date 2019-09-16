<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
<<<<<<< HEAD
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
=======
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->post_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->post_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
>>>>>>> origin/master
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
<<<<<<< HEAD
    <h3><?= h($user->id) ?></h3>
=======
    <h3><?= h($user->post_id)?></h3>
>>>>>>> origin/master
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
<<<<<<< HEAD
            <td><?= $this->Number->format($user->id) ?></td>
=======
            <td><?= $this->Number->format($user->post_id) ?></td>
>>>>>>> origin/master
        </tr>
    </table>
</div>

<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="col-2">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'font-weight-bold']) ?></li>
            <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index'], ['class' => 'font-weight-bold']) ?></li>
            <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add'], ['class' => 'font-weight-bold']) ?></li>
        </ul>
    </div>
    <div class="col-10 p-5">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend class="mb-3"><?= __('Add User') ?></legend>
            <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary float-right']) ?>
        <?= $this->Form->end() ?>
        <?= $this->Html->link(__('Back'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nna->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nna->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nna'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Affairs'), ['controller' => 'Affairs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affair'), ['controller' => 'Affairs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nna form large-9 medium-8 columns content">
    <?= $this->Form->create($nna) ?>
    <fieldset>
        <legend><?= __('Edit Nna') ?></legend>
        <?php
            echo $this->Form->input('nnanames');
            echo $this->Form->input('nnasurenames');
            echo $this->Form->input('conventionalName');
            echo $this->Form->input('age');
            echo $this->Form->input('sex');
            echo $this->Form->input('home');
            echo $this->Form->input('birthDate', ['empty' => true]);
            echo $this->Form->input('solePrint');
            echo $this->Form->input('imageOne');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

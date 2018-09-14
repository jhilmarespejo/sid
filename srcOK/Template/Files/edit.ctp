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
                ['action' => 'delete', $file->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Affairs'), ['controller' => 'Affairs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affair'), ['controller' => 'Affairs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="files form large-9 medium-8 columns content">
    <?= $this->Form->create($file) ?>
    <fieldset>
        <legend><?= __('Edit File') ?></legend>
        <?php
            echo $this->Form->input('affairs_id', ['options' => $affairs]);
            echo $this->Form->input('fileName');
            echo $this->Form->input('category');
            echo $this->Form->input('description');
            echo $this->Form->input('location');
            echo $this->Form->input('dateUpdate');
            echo $this->Form->input('dateModified');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

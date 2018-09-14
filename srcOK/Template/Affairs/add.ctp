<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Affairs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nna'), ['controller' => 'Nna', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nna'), ['controller' => 'Nna', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affairs form large-9 medium-8 columns content">
    <?= $this->Form->create($affair) ?>
    <fieldset>
        <legend><?= __('Add Affair') ?></legend>
        <?php
            echo $this->Form->input('nna_id', ['options' => $nna]);
            echo $this->Form->input('place');
            echo $this->Form->input('district');
            echo $this->Form->input('tipology');
            echo $this->Form->input('description');
            echo $this->Form->input('processType');
            echo $this->Form->input('location');
            echo $this->Form->input('affairDate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Affair $affair
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $affair->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $affair->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Affairs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nna'), ['controller' => 'Nna', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nna'), ['controller' => 'Nna', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affairs form large-9 medium-8 columns content">
    <?= $this->Form->create($affair) ?>
    <fieldset>
        <legend><?= __('Edit Affair') ?></legend>
        <?php
            echo $this->Form->control('affairs_id', ['options' => $nna]);
            echo $this->Form->control('place');
            echo $this->Form->control('district');
            echo $this->Form->control('tipology');
            echo $this->Form->control('description');
            echo $this->Form->control('processType');
            echo $this->Form->control('location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

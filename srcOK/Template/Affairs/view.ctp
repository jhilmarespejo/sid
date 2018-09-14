<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Affair'), ['action' => 'edit', $affair->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Affair'), ['action' => 'delete', $affair->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affair->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Affairs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affair'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nna'), ['controller' => 'Nna', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nna'), ['controller' => 'Nna', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="affairs view large-9 medium-8 columns content">
    <h3><?= h($affair->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nna') ?></th>
            <td><?= $affair->has('nna') ? $this->Html->link($affair->nna->id, ['controller' => 'Nna', 'action' => 'view', $affair->nna->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= h($affair->place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= h($affair->district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipology') ?></th>
            <td><?= h($affair->tipology) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($affair->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProcessType') ?></th>
            <td><?= h($affair->processType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($affair->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($affair->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AffairDate') ?></th>
            <td><?= h($affair->affairDate) ?></td>
        </tr>
    </table>
</div>

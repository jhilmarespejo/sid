<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit File'), ['action' => 'edit', $file->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete File'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nna'), ['controller' => 'Nna', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nna'), ['controller' => 'Nna', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="files view large-9 medium-8 columns content">
    <h3><?= h($file->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nna') ?></th>
            <td><?= $file->has('nna') ? $this->Html->link($file->nna->id, ['controller' => 'Nna', 'action' => 'view', $file->nna->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FileName') ?></th>
            <td><?= h($file->fileName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($file->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($file->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($file->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= h($file->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($file->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateUpdate') ?></th>
            <td><?= h($file->dateUpdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateModified') ?></th>
            <td><?= h($file->dateModified) ?></td>
        </tr>
    </table>
</div>

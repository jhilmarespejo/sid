<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nna'), ['action' => 'edit', $nna->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nna'), ['action' => 'delete', $nna->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nna->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nna'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nna'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Affairs'), ['controller' => 'Affairs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affair'), ['controller' => 'Affairs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nna view large-9 medium-8 columns content">
    <h3><?= h($nna->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nnanames') ?></th>
            <td><?= h($nna->nnanames) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nnasurenames') ?></th>
            <td><?= h($nna->nnasurenames) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ConventionalName') ?></th>
            <td><?= h($nna->conventionalName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= h($nna->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($nna->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home') ?></th>
            <td><?= h($nna->home) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SolePrint') ?></th>
            <td><?= h($nna->solePrint) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ImageOne') ?></th>
            <td><?= h($nna->imageOne) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($nna->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthDate') ?></th>
            <td><?= h($nna->birthDate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Affairs') ?></h4>
        <?php if (!empty($nna->affairs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nna Id') ?></th>
                <th scope="col"><?= __('Place') ?></th>
                <th scope="col"><?= __('District') ?></th>
                <th scope="col"><?= __('Tipology') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('ProcessType') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('AffairDate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($nna->affairs as $affairs): ?>
            <tr>
                <td><?= h($affairs->id) ?></td>
                <td><?= h($affairs->nna_id) ?></td>
                <td><?= h($affairs->place) ?></td>
                <td><?= h($affairs->district) ?></td>
                <td><?= h($affairs->tipology) ?></td>
                <td><?= h($affairs->description) ?></td>
                <td><?= h($affairs->processType) ?></td>
                <td><?= h($affairs->location) ?></td>
                <td><?= h($affairs->affairDate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Affairs', 'action' => 'view', $affairs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Affairs', 'action' => 'edit', $affairs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Affairs', 'action' => 'delete', $affairs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affairs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

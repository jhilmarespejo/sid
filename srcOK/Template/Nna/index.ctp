<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nna'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Affairs'), ['controller' => 'Affairs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affair'), ['controller' => 'Affairs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nna index large-9 medium-8 columns content">
    <h3><?= __('Nna') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nnanames') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nnasurenames') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conventionalName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solePrint') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imageOne') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nna as $nna): ?>
            <tr>
                <td><?= $this->Number->format($nna->id) ?></td>
                <td><?= h($nna->nnanames) ?></td>
                <td><?= h($nna->nnasurenames) ?></td>
                <td><?= h($nna->conventionalName) ?></td>
                <td><?= h($nna->age) ?></td>
                <td><?= h($nna->sex) ?></td>
                <td><?= h($nna->home) ?></td>
                <td><?= h($nna->birthDate) ?></td>
                <td><?= h($nna->solePrint) ?></td>
                <td><?= h($nna->imageOne) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nna->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nna->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nna->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nna->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

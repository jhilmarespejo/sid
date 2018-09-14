<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Affair'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nna'), ['controller' => 'Nna', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nna'), ['controller' => 'Nna', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affairs index large-9 medium-8 columns content">
    <h3><?= __('Affairs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nna_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipology') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processType') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('affairDate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($affairs as $affair): ?>
            <tr>
                <td><?= $this->Number->format($affair->id) ?></td>
                <td><?= $affair->has('nna') ? $this->Html->link($affair->nna->id, ['controller' => 'Nna', 'action' => 'view', $affair->nna->id]) : '' ?></td>
                <td><?= h($affair->place) ?></td>
                <td><?= h($affair->district) ?></td>
                <td><?= h($affair->tipology) ?></td>
                <td><?= h($affair->description) ?></td>
                <td><?= h($affair->processType) ?></td>
                <td><?= h($affair->location) ?></td>
                <td><?= h($affair->affairDate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $affair->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affair->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affair->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affair->id)]) ?>
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

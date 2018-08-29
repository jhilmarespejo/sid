<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nna $nna
 */
?>


<div class="board">
    <h3><?= h($nna->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($nna->nnanames) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($nna->nnasurenames) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre  convencional') ?></th>
            <td><?= h($nna->conventionalName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= h($nna->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($nna->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dirección de la vivienda') ?></th>
            <td><?= h($nna->home) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha de nacimiento') ?></th>
            <td><?= h($nna->birthDate) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('ImageOne') ?></th>
            <td><?= h($nna->imageOne) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($nna->id) ?></td>
        </tr>
    </table>

    <div >
        <h4><?= __('Related Cases') ?></h4>
        <?php if (!empty($nna->cases)): ?>
        <table class="table table-hover">
            <thead>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nna Id') ?></th>
                <th scope="col"><?= __('Place') ?></th>
                <th scope="col"><?= __('District') ?></th>
                <th scope="col"><?= __('Tipology') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('ProcessType') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </thead>
            <?php foreach ($nna->cases as $cases): ?>
            <tr>
                <td><?= h($cases->id) ?></td>
                <td><?= h($cases->nna_id) ?></td>
                <td><?= h($cases->place) ?></td>
                <td><?= h($cases->district) ?></td>
                <td><?= h($cases->tipology) ?></td>
                <td><?= h($cases->description) ?></td>
                <td><?= h($cases->processType) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cases', 'action' => 'view', $cases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cases', 'action' => 'edit', $cases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cases', 'action' => 'delete', $cases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<div class="board row">

 <!-- <?php pr($affair); ?>  -->
    <div class="col">
        <h3>Regitro de caso:</h3>
        <table class="table table-responsive table-hover">
            <tr>
                <th scope="row">Nombre</th>
                <!-- <td><?= $affair->has('nna') ? $this->Html->link($affair->nna->id, ['controller' => 'Nna', 'action' => 'view', $affair->nna->id]) : '' ?></td>  -->
                <td><?= h($affair->nna->nnanames .' '. $affair->nna->nnasurenames) ?></td> 
            </tr>
            <tr>
                <th scope="row">Nombre convencional</th>
                <td><?= h($affair->nna->conventionalName) ?></td> 
            </tr>
            <tr>
                <th scope="row"><?= __('Lugar') ?></th>
                <td><?= h($affair->place) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Distrito') ?></th>
                <td><?= h($affair->district) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha') ?></th>
                <td><?= h($affair->affairDate) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tipología') ?></th>
                <td><?= h($affair->tipology) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Descripción') ?></th>
                <td><?= h($affair->description) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tipo de Proceso') ?></th>
                <td><?= h($affair->processType) ?></td>
            </tr>
        </table>
    </div>



    <div class="col">
        <h3>Registro de documentos</h3>
        <table class="table table-responsive table-hover">
        <?php foreach($affair['files'] as $file ): ?>    
            <tr>
                <td><?php h($file['description']); ?></td>
                <!-- /sid/files/16-GANDARILLAS-MANCILLA/gamea.jpg -->
                <td><?php echo $this->Html->image($file['location']); ?> </td>
                <td><?php echo $this->Html->image($file['fileName']); ?> </td>
            </tr>
        <?php endforeach; ?>       
        </table>
    </div>


</div>

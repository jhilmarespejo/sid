<div class="board row">

 <!-- <?php pr($affair); ?>  -->
    <div class="col">
        <h3>Regitro de caso:</h3>
        <table class="table table-responsive table-hover">
            <tr>
                <th scope="row">Nombre completo</th>
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
                <th scope="row"><?= __('Fecha de registro del caso') ?></th>
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


<!-- <?php pr($affair['files']); ?> -->
    <div class="col">
        <h3>Registro de documentos</h3>
        <table class="table table-responsive table-hover">
        <?php foreach($affair['files'] as $file ): ?>    
            <tr>
                <td class="align-middle"><?php echo ($file['description']); ?></td>
                <td class="align-middle" ><?php echo $this->Html->image('/files/'.$file['location'].$file['fileName'], ['class' => 'w-25 p-3']); ?> </td>
                <td class="align-middle">
                    <button data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>       
        </table>
    </div>


</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
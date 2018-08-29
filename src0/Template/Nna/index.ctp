<?php 
        echo $this->Html->css('dataTables/jquery.dataTables.min.css'); 
        echo $this->Html->script('dataTables/jquery.dataTables.min.js');
?>

<script type="text/javascript" language="javascript" class="init">
   
    $(document).ready(function() {
        $('.dataTable').DataTable( {
            "language": {
            "lengthMenu": "Mostrar _MENU_ lineas por página",
            "zeroRecords": "No se encontraron resultados",
            "infoFiltered": "<br> Resultados filtrados: <b>_TOTAL_</b>",
            "info": "Total de registros:  _MAX_ ",
            "infoEmpty": "No se encontraron resultados",
            "search":  "Buscar:",
            "paginate": {
                "first":      "Primero",
                "last":       "Último",
                "next":       "Siguiente >",
                "previous":   "< Previo"
            },
                
            }
        } );
    } );
</script>

<div class="col-xs-16 col-sm-12 col-md-12 col-lg-12 board">
    <h3><?= __('Registros') ?></h3>
    <table class="table table-responsive display dataTable cell-border table-hover" >
        <thead>
            <tr>
                <th>id'</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Nombre Convencional</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Dirección</th>
                <th>Fecha de nacimiento</th>
                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nna as $nna): ?>
            <tr>
                <td><?= $this->Number->format($nna->id) ?></td>
                <td><?= h(strtoupper($nna->nnasurenames)) ?></td>
                <td><?= h(strtoupper($nna->nnanames)) ?></td>
                <td><?= h(strtoupper($nna->conventionalName)) ?></td>
                <td><?= h($nna->age) ?></td>
                <td><?= h($nna->sex) ?></td>
                <td><?= h($nna->home) ?></td>
                <td><?= h( $nna->birthDate->format('Y-m-d') ); ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('CASO'), ['controller' => 'affairs','action' => 'send', $nna->id, 'affairs']) ?> 
                    <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $nna->id]) ?> -->
                    <?= $this->Html->link(__('ARCHIVOS'), ['controller' => 'files', 'action' => 'add', $nna->id, 'files']) ?>
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nna->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nna->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  <!--  <nav class="pagination" aria-label="...">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first( __('Primero')) ?> 
            <?= $this->Paginator->prev( __('Anterior')) ?> 
            <?= $this->Paginator->numbers() ?> 
            <?= $this->Paginator->next(__('Siguiente')) ?> 
            <?= $this->Paginator->last(__('Último')) ?> 
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}} | mostrando {{current}} registro(s) | {{count}} total')]) ?></p>
    </nav> -->
</div>

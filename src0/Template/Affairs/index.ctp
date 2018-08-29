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
    <h3><?= __('Registro de casos') ?></h3>
    <table class="table table-hover table-responsive display dataTable" >
        <thead>
            <tr>
                <th>id</th>
                <th>nna id</th>
                <th>Lugar</th>
                <th>Distrito</th>
                <th>Tipología</th>
                <th>Descripción</th>
                <th>Tipo de Proceso</th>
                <th> Acciones</th>
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
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $affair->nna->id]); ?>
                    <?= $this->Html->link(__('Nuevo Archivo'), ['controller' => 'files', 'action' => 'add', $affair->nna->id]); ?>
                    <?= $this->Html->link(__('Ver Archivos'), ['controller' => 'files', 'action' => '', $affair->nna->id]); ?>
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affair->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affair->id)]) ?> -->
                </td>
            </tr>


            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

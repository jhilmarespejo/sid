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
    <h3><?= __('Registro de Usuarios') ?></h3>
    <table class="table table-responsive display dataTable cell-border table-hover">
        <thead>
            <tr>
                <th> Nombres </th>
                <th> Apellidos </th>
                <th> Nombre de usuario </th>
                <th> Activo </th>
                <th> Expiración de la cuenta </th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->names) ?></td>
                <td><?= h($user->surnames) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= $user->active == 1 ? 'SI' : 'NO'; ?></td>
                <td><?= h($user->expirationAccount->format('Y-m-d')); ?></td>
                <td class="actions">
                    <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?> -->
                    <?= $this->Html->link(__('Editar registro'), ['action' => 'edit', $user->id]) ?>
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

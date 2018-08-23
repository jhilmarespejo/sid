
<!-- <br/><br/><br/>
<?= $this->Form->create($file, ['type' => 'file']) ?>
    <?php
        echo $this->Form->input('affairs_id', ['value' => $nna->affairs[0]->id, 'type' => 'text' ]);
        echo $this->Form->control('fileName');
        echo $this->Form->control('category');
        echo $this->Form->control('description');
        echo $this->Form->control('location');
        echo $this->Form->control('dateUpdate', ['empty' => true]);
        echo $this->Form->control('dateModified', ['empty' => true]);
        echo $this->Form->control('active');
    ?>
<div class="text-center" ><?= $this->Form->button(__('Guardar'), ['class' => ' btn btn-primary btn-lg']) ?></div>
<?= $this->Form->end() ?>


 -->
<div class="board">
    <fieldset>
        <legend><?= __('Agregar Imagenes o documentos') ?></legend>
        <div class="form-group">
            <label>Nombre</label>
            <?php echo $this->Form->control('x', ['label' => false, 'class'=>'form-control', 'value' => strtoupper($nna->nnanames.' '.$nna->nnasurenames), 'readonly' => true]); ?>
        </div>

        <div class="form-group">
            <label>Nombre convencional</label>
            <?php echo $this->Form->control('x', ['label' => false, 'class'=>'form-control', 'value' => strtoupper($nna->conventionalName), 'readonly' => true]); ?>
        </div>

        <?= $this->Form->create($file, ['type' => 'file']) ?>
        <?php echo $this->Form->hidden('affairs_id', ['value' => $nna->affairs[0]->id ]);?>
        <?php echo $this->Form->hidden('location', ['value' => $nna->affairs[0]->location ]);?>

        <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'IMAGEN', 'value' => 'IMAGEN'],[ 'text' => 'DOCUMENTOS', 'value' => 'DOCUMENTOS']]; ?>
        <div class="form-group">
            <label>Categoría</label>
            <?php echo $this->Form->select('category', $options, ['label' => false, 'required', 'class'=>'form-control']); ?>
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <?php echo $this->Form->input('description', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'multiple' => true] );?>
        </div>

        <?php echo $this->Form->input('fileName', ['label' => 'archivo', 'class'=>'xcustom-file-input', 'type' => 'file', 'multiple' => false] );?>
    </fieldset>
    <div class="text-center" ><?= $this->Form->button(__('Guardar'), ['class' => ' btn btn-primary btn-lg']) ?></div>
    <?= $this->Form->end() ?>
</div>

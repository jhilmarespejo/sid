nd() ?>
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

        <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'IMAGENES', 'value' => 'IMAGENES'],[ 'text' => 'DOCUMENTOS', 'value' => 'DOCUMENTOS']]; ?>
        <div class="form-group">
            <label>Categoría</label>
            <?php echo $this->Form->select('category', $options, ['label' => false, 'required', 'class'=>'form-control']); ?>
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <?php echo $this->Form->input('description', ['label' => false, 'class'=>'form-control', 'type' => 'text'] );?>
        </div>

        <?php echo $this->Form->input('fileName', ['label' => 'archivo', 'class'=>'xcustom-file-input', 'type' => 'file', 'multiple' => true] );?>
    </fieldset>
    <div class="text-center" ><?= $this->Form->button(__('Guardar'), ['class' => ' btn btn-primary btn-lg']) ?></div>
    <?= $this->Form->end() ?>
</div>

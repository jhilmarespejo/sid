
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

        <?php if( isset($nna->affairs[0]->id) ) { ?>
            <?= $this->Form->create($file, ['type' => 'file']) ?>
            <?php echo $this->Form->hidden('affairs_id', ['value' => $nna->affairs[0]->id ]);?>
            <?php echo $this->Form->hidden('location', ['value' => $nna->affairs[0]->location ]);?>

            <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'], [ 'text' => 'IMAGENES', 'value' => 'IMAGENES'], [ 'text' => 'DOCUMENTOS ÁREA SOCIAL', 'value' => 'DOCUMENTOS AREA SOCIAL'], [ 'text' => 'DOCUMENTOS ÁREA PSICOLÓGICA', 'value' => 'DOCUMENTOS AREA PSICOLOGICA'], [ 'text' => 'DOCUMENTOS ÁREA SALUD', 'value' => 'DOCUMENTOS AREA SALUD'], [ 'text' => 'DOCUMENTOS ÁREA LEGAL', 'value' => 'DOCUMENTOS AREA LEGAL']]; ?>
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
        <?php } else { ?>
            <div class="alert alert-warning alert-dismissible fade show slow text-center" role="alert" >
              <strong>Error!</strong> Para agregar imagenes o documentos primero debe agregar un CASO DE ANTENCION! <br/><br/><br/>
              <?= $this->Html->link(__('AGREGAR CASO DE ANTENCION'), ['controller' => 'affairs','action' => 'send', $nna->id, 'affairs'], [ 'class' => 'btn btn-success btn-lg ', 'role' => 'button',]) ?> 
              
            </div>
        <?php } ?>    
</div>

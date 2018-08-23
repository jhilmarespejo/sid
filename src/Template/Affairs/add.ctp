

<div class="board">

    <?= $this->Form->create($affair) ?>
        <fieldset>
            <legend><?= __('Adición de Caso') ?></legend>
            <?php
                $fullName = $nna->nnasurenames.$nna->nnanames;

                $folder = (!empty($fullName))? $nna->id.'-'.str_replace(' ', '-', $nna->nnasurenames).'/' : $nna->id.'-'.str_replace(' ', '-', $nna->conventionalName).'/'; 


            ?>
            <?php 
                echo $this->Form->hidden('nna_id',['value' => $nna->id] ); 
                echo $this->Form->hidden('location',['value' => $folder] ); 
            ?>
            <div class="form-group">
                <label>Nombre completo</label>
                <?php echo $this->Form->control('x', ['label' => false, 'class'=>'form-control', 'value' => $nna->nnasurenames.' '.$nna->nnanames, 'readonly' => true]); ?>
            </div>
             <div class="form-group">
                <label>Nombre convencional</label>
                <?php echo $this->Form->control('x', ['label' => false, 'class'=>'form-control', 'value' => strtoupper($nna->conventionalName), 'readonly' => true]); ?>
            </div>
            <div class="form-group">
                <label>Lugar</label>
                <?php echo $this->Form->control('place', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <label>Distrito</label>
                <?php echo $this->Form->control('district', ['label' => false, 'class'=>'form-control', 'type' => 'number', 'max' => '14', 'min' => '1']); ?>
            </div>
            <div class="form-group">
                <label>Tipología</label>
                <?php echo $this->Form->control('tipology', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <label>Breve descripción del caso</label>
                <?php echo $this->Form->control('description', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <label>Tipo de proceso</label>
                <?php echo $this->Form->control('processType', ['label' => false, 'class'=>'form-control']); ?>
            </div>

        </fieldset>
        <div class="text-center" ><?= $this->Form->button(__('Guardar'), ['class' => ' btn btn-primary btn-lg']) ?>
        </div>
        <?= $this->Form->end() ?>
</div>
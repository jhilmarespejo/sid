


<div class="board">
    <?= $this->Form->create($nna) ?>
    <fieldset>
        <legend><?= __('Nuevo Registro') ?></legend>
        <div class="form-group">
            <label>Apellidos</label>
            <?php echo $this->Form->input('nnasurenames', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
        </div>
        <div class="form-group">
            <label>Nombres</label>
            <?php echo $this->Form->input('nnanames', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
        </div>

        <div class="form-group">
            <label>Nombre Convencional</label>
            <?php echo $this->Form->input('conventionalName', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => ''] );?>
        </div>

        <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'M', 'value' => 'M'],[ 'text' => 'F', 'value' => 'F']]; ?>
        <div class="form-group">
            <label>Sexo</label>
            <?php echo $this->Form->select('sex', $options, ['label' => false, 'required', 'class'=>'form-control']); ?>
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <?php echo $this->Form->input('home', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => ''] );?>
        </div>
        <div class="form-group">
            <label>Fecha de nacimiento</label>
            <?php echo $this->Form->input('birthDate', ['label' => false, 'class'=>'form-control', 'type' => 'date', 'placeholder' => ''] );?>
        </div>
    </fieldset>
    <div class="text-center" ><?= $this->Form->button(__('Guardar'), ['class' => ' btn btn-primary btn-lg']) ?></div>
    <?= $this->Form->end() ?>
</div>

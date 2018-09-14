
<div class="board">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('Por favor ingrese los datos de Ususario y Contraseña') ?></legend>
		<div class="text-form">
			<label>Nombre de usuario:</label>
			<?= $this->Form->input('username', ['label' => false, 'class'=>'form-control']); ?>
		</div><br>
		<div class="text-form">
			<label>Contraseña</label>
			<?= $this->Form->input('password', ['label' => false, 'class'=>'form-control']) ?>
			<br/>
		</div>
	<div class="text-center">
		<?= $this->Form->button(__('Ingresar'), ['class' => 'text-center btn btn-primary btn-lg']); ?>
	</div>
	<?= $this->Form->end() ?>
	</fieldset><br>
</div>

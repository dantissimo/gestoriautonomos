
<h1>Registro de Usuario</h1>
<br>
<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
)); ?>
	<?php echo $form->errorSummary($usr); ?>
	<?php echo $form->errorSummary($client); ?>

	<?php echo $form->textFieldRow($usr,'user',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->passwordFieldRow($usr,'password',array('class'=>'span5','maxlength'=>20)); ?>
	
	<?php echo $form->textFieldRow($client,'nom',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($client,'cognom1',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($client,'cognom2',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($client,'dni',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($client,'carrer',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($client,'num',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($client,'pis',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($client,'porta',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($client,'poblacio',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($client,'cp',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($client,'provincia',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($client,'telefono',array('class'=>'span5','maxlength'=>9)); ?>

	<?php echo $form->textFieldRow($client,'email',array('class'=>'span5','maxlength'=>50)); ?>
<br>
	<div>
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'ok white',
			'label'=>$usr->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'link',
			'type'=>'action',
			'icon'=>'remove',
			'label'=>'Volver',
			'url'=>array('site/index'),
		)); ?>

	</div>

<?php $this->endWidget(); ?>
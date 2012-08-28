<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
)); ?>
	

	<?php echo $form->errorSummary(array($model)); ?>

	<?php echo $form->textFieldRow($model,'user',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>20)); ?>

	<div>
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'ok white',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'link',
			'type'=>'action',
			'icon'=>'remove',
			'label'=>'Volver',
			'url'=>array('users/admin'),
		)); ?>

	</div>

<?php $this->endWidget(); ?>

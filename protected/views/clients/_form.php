<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'clients-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nom',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'cognom1',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'cognom2',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'dni',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'carrer',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'num',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'pis',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'porta',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'poblacio',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'cp',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'provincia',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>9)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nom_complet',array('class'=>'span5','maxlength'=>100)); ?>

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
			'url'=>array('clients/admin'),
		)); ?>

	</div>
<?php $this->endWidget(); ?>

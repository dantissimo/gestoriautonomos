
<h1>Detalle Usuario #<?php echo $model->user ?></h1>
<br>
<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_client',
		'user',
		'data_alta',
	),
)); ?>

<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'link',
			'type'=>'action',
			'label'=>'Volver',
			'url'=>array('users/admin'),
		)); ?>

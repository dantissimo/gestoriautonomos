
<h1>Detalle Cliente #<?php echo $model->nom . " " . $model->cognom1 ; ?></h1>
<br>
<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nom_complet',
		'dni',
		'carrer',
		'num',
		'pis',
		'porta',
		'poblacio',
		'cp',
		'provincia',
		'telefono',
		'email',
		
	),
)); 
?>
<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'link',
			'type'=>'action',
			'label'=>'Volver',
			'url'=>array('clients/admin'),
		)); ?>

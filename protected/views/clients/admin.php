<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Clients','url'=>array('index')),
	array('label'=>'Create Clients','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('clients-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Clientes</h1>

<?php 
	$this->widget('bootstrap.widgets.BootGridView',array(
		'id'=>'clients-grid',
		'dataProvider'=>$model->search(),
		'columns'=>array(
			'id_client',
			'nom',
			'cognom1',
			'dni',
			'poblacio',
			/*
			'num',
			'pis',
			'porta',
			'complement',
			'carrer',
			'cp',
			'provincia',
			'telefono',
			'email',
			'nom_complet',
			*/
			array(
				'class'=>'bootstrap.widgets.BootButtonColumn',
				'template'=>'{view}{update}',
			),
		),
	)); 
	?>

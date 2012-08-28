<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Usuarios</h1>

<?php 
if(Yii::app()->user->name == 'Administrador'){
	$this->widget('bootstrap.widgets.BootGridView',array(
		'id'=>'users-grid',
		'type'=>'striped',
		'dataProvider'=>$model->search(),
		'columns'=>array(
			'id_client',
			'user',
			'data_alta',
			array(
				'class'=>'bootstrap.widgets.BootButtonColumn',
				'template'=>'{view}{update}{delete}',
				),
		),
	));
}else{
	$this->widget('bootstrap.widgets.BootGridView',array(
		'id'=>'users-grid',
		'type'=>'striped',
		'dataProvider'=>$model->search(),
		'columns'=>array(
			'id_client',
			'user',
			'data_alta',
			array(
				'class'=>'bootstrap.widgets.BootButtonColumn',
				'template'=>'{view}{update}',
				),
		),
	));
} ?>


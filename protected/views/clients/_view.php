<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_client')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_client),array('view','id'=>$data->id_client)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cognom1')); ?>:</b>
	<?php echo CHtml::encode($data->cognom1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cognom2')); ?>:</b>
	<?php echo CHtml::encode($data->cognom2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrer')); ?>:</b>
	<?php echo CHtml::encode($data->carrer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::encode($data->num); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pis')); ?>:</b>
	<?php echo CHtml::encode($data->pis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porta')); ?>:</b>
	<?php echo CHtml::encode($data->porta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complement')); ?>:</b>
	<?php echo CHtml::encode($data->complement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poblacio')); ?>:</b>
	<?php echo CHtml::encode($data->poblacio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_complet')); ?>:</b>
	<?php echo CHtml::encode($data->nom_complet); ?>
	<br />

	*/ ?>

</div>
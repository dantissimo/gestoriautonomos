<?php $this->beginContent('//layouts/main'); ?>
        
        <div class="span3">
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'list',
		    'items'=>array(
	        	array('label'=>'ADMINISTRACION','visible'=>(Yii::app()->user->name == 'Administrador')),
	        	array('label'=>'DATOS DE CUENTA','visible'=>(Yii::app()->user->name != 'Administrador')),
		        array('label'=>'Informacion de Usuario', 'icon'=>'user', 'url'=>array('users/admin')),
		        array('label'=>'Informacion de Cliente', 'icon'=>'user', 'url'=>array('clients/admin')),
		        array('label'=>'Nuevo Usuario/Cliente', 'icon'=>'user', 'visible'=>(Yii::app()->user->name == 'Administrador'), 'url'=>array('users/create')),
		        array('label'=>'DATOS FISCALES'),
		        array('label'=>'Resumen', 'icon'=>'book', 'url'=>'#'),
		        array('label'=>'Ingresos', 'icon'=>'pencil', 'url'=>'#'),
		        array('label'=>'Gastos', 'icon'=>'pencil', 'url'=>'#'),
		        array('label'=>'Envio de Renta', 'icon'=>'flag', 'url'=>'#'),
		    ),
		)); ?>
        </div><!--/span-->
        
         <div class="span8">
			<?php echo $content; ?>
		</div>

<?php $this->endContent(); ?>

<?php
$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contacto</h1>

<p>
En caso de tener alguna duda ponerse en contacto con nosotros.
</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'contact-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="row">
                <div id="contact">

                    <div class="span8">
                   <div class="input-xxlarge">
                    <?php if(Yii::app()->user->hasFlash('success')):
	
	                    Yii::app()->user->setFlash('success','<strong>Gracias</strong> por ponerte en contacto con nosotros. En breve le daremos respuesta a su pregunta');
	                    $this->widget('bootstrap.widgets.BootAlert'); ?>

	                <?php endif; ?>
	                    
                        <?php echo $form->errorSummary($model); ?>
                    </div>
                        <form action="" method="post" class="span6">
                            <fieldset>
                                <div class="clearfix">
                                    <?php echo $form->labelEx($model,'Nombre'); ?>
                                    <?php echo $form->textField($model,'name',array('class'=>'input-xxlarge')); ?>
                                </div>
                                <div class="clearfix">
                                    <?php echo $form->labelEx($model,'Email'); ?>
                                    <?php echo $form->textField($model,'email',array('class'=>'input-xxlarge')); ?>
                                </div>
                                <div class="clearfix">
	                                <?php echo $form->labelEx($model,'Pregunta'); ?>
	                                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50,'class'=>'input-xxlarge')); ?>
                                </div>
                                	<div>
	                                	<?php echo CHtml::submitButton('Enviar',array('class'=>'btn btn-wonka-land-3 btn-large')); ?>
	                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div class="span4">
                        <address>
                            <p><strong>Telefono: </strong>977 700000<br>
                                <strong>Fax: </strong>977 700000<br>
                                <strong>Horario de Atenci&oacute;n al cliente: </strong>9:00-14:00 y 16:00-18:00<br>
                                <br>
                                <strong>Direcci&oacute;n: </strong>C/Grau 21 Bajos<br>
                            </p>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/map.jpg" alt="map" class="thumbnail" />
                        </address>
                    </div>

                </div> 
            </div>
            <!-- end row -->

<?php $this->endWidget(); ?>

</div><!-- form -->


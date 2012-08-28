<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Inserta tus datos para entrar en tu cuenta de usuario</p>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>
	<div class="row">
        <div id="contact">
             <div class="span8">
                 <form action="" method="post" class="span6">
                 <div class="input-xxlarge">
                 <?php 
                 	if(Yii::app()->user->hasFlash('loginerror')){
                 		Yii::app()->user->setFlash('error',''.$form->errorSummary($model).'');
                 		$this->widget('bootstrap.widgets.BootAlert');
                 	}
                  ?>
                 </div>
                     <fieldset>
                         <div class="clearfix">
							<?php echo $form->labelEx($model,'username'); ?>
							<?php echo $form->textField($model,'username'); ?>
                          </div>
							<div class="clearfix">
								<?php echo $form->labelEx($model,'password'); ?>
								<?php echo $form->passwordField($model,'password'); ?>
							</div>

							<div class="clearfix rememberMe">
							<?php echo $form->checkBox($model,'rememberMe'); ?>
							<?php echo $form->label($model,'rememberMe'); ?>
							</div>
							
							<div class="clearfix buttons">
							<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-wonka-land-3 btn-large')); ?>
							</div>
                      </fieldset>
                 </form>
             </div>
         </div>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->


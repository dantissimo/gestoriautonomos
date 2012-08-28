<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gestoria Autonomos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>

        <style>
            body {
                padding-top: 80px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/resposive.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="brand"><h2>Gestoria Autonomos </h2><p class='block-help'>Fácil y Rápido</p></a>
                    <div class="nav-collapse">
                    	<?php
                    	$this->widget('zii.widgets.CMenu',array(
						  //'activeCssClass'=>'active',
						  'htmlOptions'=>array('class'=>'nav'),
						  'items'=>array(
						    array('label'=>'Inicio','url'=>array('/site/index')),
						    array('label'=>'Planes y Precios','url'=>array('/site/page/','view'=>'planes')),
						    array('label'=>'Preguntas','url'=>array('/site/page/','view'=>'preguntas')),
						    array('label'=>'Imagenes','url'=>array('/site/page/','view'=>'portfolio')),
						    array('label'=>'Sobre Nosotros','url'=>array('/site/page','view'=>'about')),
						    array('label'=>'Contacto','url'=>array('/site/contact')),
						  ),
						));
						?>
						
						<?php
                    if(Yii::app()->user->isGuest){
                     ?><div class="btn-toolbar">
						    <?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
						        'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
						        'size'=>'small',
						        'buttons'=>array(
						            array('label'=>'Entrar', 'items'=>array(
						                array('label'=>'Login', 'url'=>array('/site/login')),
						                '---',
						                array('label'=>'Registrarse', 'url'=>array('/site/create')),
						            )),
						        ),
						    )); ?>
						</div><?php
					}else{
					?>
						<div class="btn-toolbar">
						    <?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
						        'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
						        'size'=>'small',
						        'buttons'=>array(
						            array('label'=>'Bienvenid@: '.Yii::app()->user->name, 'items'=>array(
						                array('label'=>'Salir', 'url'=>array('/site/logout')),
						                '---',
						                array('label'=>'Panel de Control', 'url'=>array('/users/admin')),
						            )),
						        ),
						    )); ?>
						
						</div><?php
					}
					
					?>
                    </div><!--/.nav-collapse -->
                    
                </div>
            </div>
        </div>

        <div class="container">
	        <?php echo $content; ?>
        </div> <!-- /container -->
        <div id="footer">
            <div class="container">
                <div class="row">


                    <div class="span4 clearfix">

                        <h3>Suscribirse a la Newsletter</h3>
                        <p>Suscríbete a nuestra Newsletter para recibir las últimas notícias sobre nosotros</p>
                        <form class="form-search" method="post">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="inputIcon" class="span2" placeholder="Email address" required>
                                    </div>
                                    <input type="submit" value="Enviar" class="btn btn-wonka-land-3 btn-large">
                                </div>
                            </div>
                        </form>

                    </div> <!-- /span4 -->

                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <div>&copy; Gestoria Autonomos 2012</div>
                    <div pull-right></div>
                </div>
            </div>
        </div>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script type="text/javascript">
            $(document).ready(function() {
                $('li').each(function(i){
                    $(this).fadeIn(600 * i);
                });
            }); //close document.ready
        </script>
    </body>
</html>
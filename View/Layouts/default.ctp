<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Realidad Aumentada');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset('iso-8859-1'); ?>
	<title>
		<?php echo $cakeDescription ?>
		<?php //echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('cake.generic','bootstrap-glyphicons'));
        echo $this->Html->script(array('jquery1.10.min','realidad_aumentada','bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 
</head>
<body>
	<div id="container">
		<header id="header">
        <div class="logo">
        <?php //echo $this->Html->link("&nbsp;", array('controller'=>'users','action'=>'inicio'),array('title'=>'www.cholulanightlife.com','escape'=>false,'style'=>'border:transparent red 1px;display:block;width:250px;height:100px;')); ?>
        </div>
        <nav>
        <?php if($isSession):?> 
            <ul class="fondo_nav">
                <?php if($isAdmin):?>
                  
                <?php endif;?>
                <?php if($isSuperAdmin):?>        
                <?php endif; ?>
                <li> 
                  <?php echo $this->Html->link("&nbsp;salir(".$user['name'].")", array('controller'=>'users','action'=>'logout'),array('class'=>'glyphicon glyphicon-remove','escape'=>false)); ?> 
                </li>
            </ul>
            <?php endif; ?>
        </nav>
		</header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
            <div id="loading" class="loading"></div>
			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer">
			<?php 
                echo $this->Form->hidden('urlpagina',array('value'=>'http://'.$_SERVER['SERVER_NAME'].Router::url('/').$this->params['controller']));
			?>
            
            <div style="clear: both;"></div>
		</footer>
	</div>
	<?php 
        echo $this->element('sql_dump');
        echo $this->Js->writeBuffer();
    ?>
</body>
</html>

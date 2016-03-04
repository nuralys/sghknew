<?php
/**
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title> 
		<?php echo $title_for_layout ?>
	</title>
	<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
	<?php endif; ?>
	<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
	<?php endif; ?>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script(array('jquery.min' ,'ckeditor/ckeditor.js'));
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			
			<h1>Админ часть</h1>
		</div>
		<div id="content">
<?php if(AuthComponent::user()):?>

	<?php echo $this->Html->link('Страницы', '/admin/pages') ?>
	<?php echo $this->Html->link('Новости', '/admin/news') ?>
	<?php echo $this->Html->link('Альбомы', '/admin/albums') ?>
	<?php echo $this->Html->link('Фотогалерея', '/admin/gallery') ?>
	<?php echo $this->Html->link('Руководство', '/admin/leaderships') ?>
	<?php echo $this->Html->link('Сертификаты', '/admin/certifications') ?>
	<?php echo $this->Html->link('Клиенты', '/admin/clients') ?>
	<?php echo $this->Html->link('Награды', '/admin/honors') ?>
	<?php echo $this->Html->link('Видео', '/admin/videos') ?>
	<?php echo $this->Html->link('Выход', '/admin/users/logout') ?>
 <?php else:  ?>
	<?php echo $this->Html->link('Вход', '/admin/users/login') ?>
<?php endif; ?>
<hr>
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>
			
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>

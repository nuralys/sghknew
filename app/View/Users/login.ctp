<section class="cr bg_w">
	<div class="box content">
		<div class="gallery">
			<h2>Вход в административную панель</h2>
			<?php 
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('label' => 'Имя пользователя'));
	echo $this->Form->input('password', array('label' => 'Пароль'));
	echo $this->Form->end('Войти');
?>
		</div>
	</div>
</section>
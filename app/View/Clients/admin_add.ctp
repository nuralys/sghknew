<div class="title admin_t">
	<h2>Добавление клиента/партнера</h2>
</div>
<?php 
echo $this->Form->create('Client', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление награды</h2>
	</div>
<?php 
echo $this->Form->create('Honor', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>
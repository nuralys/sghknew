<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление сертификата</h2>
	</div>
<?php 

echo $this->Form->create('Certification', array('type' => 'file'));

echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

echo $this->Form->end('Создать');
?>

</div>
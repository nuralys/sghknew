	<div class="title admin_t">Редактирование Фотосессии</div>
<?php 

echo $this->Form->create('Album', array('type' => 'file'));
echo $this->Form->input('title', array('label'  => '', 'class' => 'admin_input_f model ','placeholder' => 'Название'));
echo $this->Form->input('created', array('label' => 'Дата:'));?>

<div class="edit_bot">
<img src="/img/album/thumbs/<?=$data['Album']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	
	?>
	</div>
</div>
<?php echo $this->Form->end('Редактировать');?>
</div>
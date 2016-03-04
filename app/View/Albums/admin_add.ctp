	<div class="title admin_t">Добавление альбома</div>
<?php 
echo $this->Form->create('Album', array('type' => 'file'));
?>
<div class="input select">
	<label for="AlbumCategoryId">Категория:</label>
	<select name="data[Album][category_id]" id="AlbumCategoryId" required="required">
		<option value="">Выберите категорию</option>
		<option value="1">Трудовые будни</option>
		<option value="2">Отдых</option>
		<option value="3">Спорт</option>
	</select>
</div>
<?php
echo $this->Form->input('title', array('label' => '', 'class' => 'admin_input_f model ','placeholder' => 'Название'));
echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->input('created', array('label' => 'Дата'));
echo $this->Form->end('Создать');
?>
</div>
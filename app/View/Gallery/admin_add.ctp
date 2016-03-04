<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление фото</h2>
	</div>
<?php 
echo $this->Form->create('Gallery', array('type' => 'file'));
?>
<div class="input select">
	<label for="GalleryAlbumId">Альбом:</label>
	<select name="data[Gallery][album_id]" id="GalleryAlbumId">
		<option value="">Выберите альбом</option>
		<?php foreach($albums as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach; ?>
	</select>
	или <a href="/admin/albums/add">Добавить альбом</a>
</div>
<?php
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>
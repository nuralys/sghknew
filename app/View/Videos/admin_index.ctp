<div class="admin_gallery">
<a href="/admin/videos/add" class="add_admin">Добавить видео</a>
	<div class="admin_item">
<?php foreach ($data as $v) :?>
	<?php foreach($v['titleTranslation'] as $title): ?>
		<div class="title"><?= $title['locale'] .': '. $title['content']; ?></div>
		<?php endforeach; ?>
		Редактировать: <a href="/admin/videos/edit/<?=$v['Video']['id']?>?lang=ru">рус</a>
	 <a href="/admin/videos/edit/<?=$v['Video']['id']?>?lang=kz">каз</a><br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $v['Video']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</div>
 
<?php endforeach; ?>
</div>
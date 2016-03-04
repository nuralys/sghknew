<a href="/admin/albums/add" class="add_admin">Добавить</a>
<?php 
// debug($data);
foreach ($data as $item) : ?>
 <div class="admin_item">
	<?php foreach($item['titleTranslation'] as $title): ?>
		<div class="title"><?= $title['locale'] .': '. $title['content']; ?></div>
	<?php endforeach; ?>
	Редактировать: <a href="/admin/albums/edit/<?=$item['Album']['id']?>?lang=ru"> рус</a> |
	 <a href="/admin/albums/edit/<?=$item['Album']['id']?>?lang=kz"> каз</a><br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Album']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
</div> 
<?php endforeach; ?>
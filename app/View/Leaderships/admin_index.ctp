<a href="/admin/leaderships/add" class="add_admin">Добавить</a>
<?php 
// debug($data);
foreach ($data as $item) : ?>
<div class="admin_item">
	<?php foreach($item['titleTranslation'] as $title): ?>
		<div class="title"><?= $title['locale'] .': '. $title['content']; ?>	</div>
	<?php endforeach; ?>
	Редактировать: <a href="/admin/leaderships/edit/<?=$item['Leadership']['id']?>?lang=ru"> рус</a> |
	 <a href="/admin/leaderships/edit/<?=$item['Leadership']['id']?>?lang=kz"> каз</a><br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Leadership']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
		</div>
<?php endforeach; ?>
<a href="/admin/honors/add" class="add_admin">Добавить</a>
<?php 
// debug($data);
foreach ($data as $item) : ?>
	<div class="admin_item">
	 Редактировать: <a href="/admin/honors/edit/<?=$item['Honor']['id']?>?lang=ru">
	 <img src="/img/honor/thumbs/<?=$item['Honor']['img']?>" /></a>
	
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Honor']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</div>
<?php endforeach; ?>
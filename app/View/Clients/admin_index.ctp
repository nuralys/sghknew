<a href="/admin/clients/add" class="add_admin">Добавить</a><br>
<?php 
// debug($data);
foreach ($data as $item) : ?>
 <div class="admin_item">
	 Редактировать: <a href="/admin/clients/edit/<?=$item['Client']['id']?>?lang=ru">
	 <img src="/img/client/thumbs/<?=$item['Client']['img']?>" />
	 </a>
	 <br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Client']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</div> 
<?php endforeach; ?>
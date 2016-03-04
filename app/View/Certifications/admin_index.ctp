<a href="/admin/certifications/add" class="add_admin">Добавить</a><br>
<?php 
// debug($data);
foreach ($data as $item) : ?>
 <div class="admin_item_cerf">
	  <a href="/admin/certifications/edit/<?=$item['Certification']['id']?>?lang=ru"> 
	<img src="/img/certification/thumbs/<?=$item['Certification']['img']?>">
	  Редактировать</a>
<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Certification']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
</div> 
<?php endforeach; ?>
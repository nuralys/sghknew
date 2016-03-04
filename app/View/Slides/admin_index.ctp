<a href="/admin/slides/add" class="add_admin">Добавить</a><br>
<?php 
 //debug($data);
 <div class="admin_item">
foreach ($data as $item) : ?>
	<?php foreach($item['titleTranslation'] as $title): ?>
		<?= $title['locale'] .': '. $title['content']; ?><br>
	<?php endforeach; ?>
Редактировать: <a href="/admin/slides/edit/<?=$item['Slide']['id']?>?lang=ru"> рус</a> |
	 <a href="/admin/slides/edit/<?=$item['Slide']['id']?>?lang=kz"> каз</a> |
	 <a href="/admin/slides/edit/<?=$item['Slide']['id']?>?lang=en"> eng</a><br>
<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Slide']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
</div>
<?php endforeach; ?>
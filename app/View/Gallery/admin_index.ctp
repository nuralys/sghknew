<div class="admin_gallery" >
<a href="/admin/gallery/add" class="add_admin">Добавить фото</a>
<?php foreach ($data as $v) :?>
 <div class="admin_item">
	<?php foreach($v['titleTranslation'] as $title): ?>
				<div class="title"><?= $title['locale'] .': '. $title['content']; ?></div>
		<?php endforeach; ?>
		<img src="/img/gallery/<?=$v['Gallery']['img'] ?>"> 
		Редактировать: <a href="/admin/gallery/edit/<?=$v['Gallery']['id']?>?lang=ru">рус</a>
	 <a href="/admin/gallery/edit/<?=$v['Gallery']['id']?>?lang=kz">каз</a><br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $v['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</div>

<?php endforeach; ?>
</div>
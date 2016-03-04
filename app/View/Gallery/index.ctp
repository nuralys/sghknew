<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие')?></h2>
	</div>
	<ul class="sidebar_nav">
		<li <?php echo ($data[0]['Album']['category_id'] == 1) ? " class='active'" : "" ?>><a href="/<?=$lang?>albums/1"><?php echo __('Трудовые будни')?></a></li>
		<li <?php echo ($data[0]['Album']['category_id'] == 2) ? " class='active'" : "" ?>><a href="/<?=$lang?>albums/2"><?php echo __('Отдых')?></a></li>
		<li <?php echo ($data[0]['Album']['category_id'] == 3) ? " class='active'" : "" ?>><a href="/<?=$lang?>albums/3"><?php echo __('Спорт')?></a></li>
		<li><a href="/<?=$lang?>videos"><?php echo __('Видео')?></a></li>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
	<?php //debug($data) ?>
		<ul class="gallery_list_item">
		<?php if(empty($data)): ?>
			<p><?php echo __('В данном разеде еще нету информации') ?></p> 
		<?php else: ?>
			<?php foreach ($data as $item) :?>
			<li>
				<div class="gallery_item_img">
					<a href="/img/gallery/<?=$item['Gallery']['img'] ?>" ><img src="/img/gallery/thumbs/<?=$item['Gallery']['img'] ?>" alt="<?=$item['Gallery']['title'] ?>"></a>
					<a class="heading fancybox" href="/img/gallery/<?=$item['Gallery']['img'] ?>"><?=$item['Gallery']['title'] ?></a>
				</div>
			</li>
		<?php endforeach; ?>
		<?php endif; ?>	
		</ul>
	</div>
</div>
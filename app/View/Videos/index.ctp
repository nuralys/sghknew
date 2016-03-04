<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие')?></h2>
	</div>
	<ul class="sidebar_nav">
		<li><a href="/<?=$lang?>albums/1"><?php echo __('Трудовые будни')?></a></li>
		<li><a href="/<?=$lang?>albums/2"><?php echo __('Отдых')?></a></li>
		<li><a href="/<?=$lang?>albums/3"><?php echo __('Спорт')?></a></li>
		<li class="active"><a href="/<?=$lang?>videos"><?php echo __('Видео')?></a></li>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
		<ul class="gallery_list_item">
		<?php if(empty($data)): ?>
			<p><?php echo __('В данном разеде еще нету информации') ?></p> 
		<?php else: ?>
			<?php foreach($data as $item): ?>
				<?php
				if (stripos($item['Video']['link'], 'youtube.com') !== false) {
					preg_match('#v=([^\&]+)#is', $item['Video']['link'], $videoId);
					if (count ($videoId) > 0) {
						//у нас есть id video, ссылка правильная
						// $videoId[1] - ID видео
						$id = $videoId[1];
					}
				}
				?>
			<li>
				<div class="gallery_item_img">
					<a class="fancybox-media" href="http://www.youtube.com/watch?v=<?=$id?>"><img src="//i.ytimg.com/vi_webp/<?=$id ?>/mqdefault.webp"/></a>
					<p class="heading" href="#"><?=$item['Video']['title'] ?></p>
				</div>
			</li>
		<?php endforeach; ?>
		<?php endif; ?>	
		</ul>
	</div>
</div>
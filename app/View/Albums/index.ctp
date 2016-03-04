<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие') ?></h2>
	</div>
	<?php //debug($this->request->pass['0']); ?>
	<ul class="sidebar_nav">
		<li <?php echo ($this->request->pass['0'] == 1) ? "class='active'" : "" ?>><a href="/<?=$lang?>albums/1">Трудовые будни</a></li>
		<li <?php echo ($this->request->pass['0'] == 2) ? "class='active'" : "" ?>><a href="/<?=$lang?>albums/2">Отдых</a></li>
		<li <?php echo ($this->request->pass['0'] == 3) ? "class='active'" : "" ?>><a href="/<?=$lang?>albums/3">Спорт</a></li>
		<li <?php echo ($this->request->pass['0'] == 1) ? "class='active'" : "" ?>><a href="/<?=$lang?>videos">Видео</a></li>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
		<ul class="gallery_list_item">
		<?php if(empty($data)): ?>
		<p><?php echo __('В данном разеде еще нету информации') ?></p> 
		<?php else: ?>
		<?php foreach ($data as $item):?>
			<li>
				<div class="gallery_item_img">
					<a href="/gallery/<?=$item['Album']['id']; ?>" ><img src="/img/album/thumbs/<?=$item['Album']['img']; ?>" alt="<?=$item['Album']['title']; ?>"></a>
				</div>
				<a  href="/gallery/<?=$item['Album']['id']; ?>" class="title_news__item">
					<?=$item['Album']['title']; ?>
				</a>
			</li>
		<?php endforeach;?>
		<?php endif; ?>
		</ul>
	</div>
</div>	
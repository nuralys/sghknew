<?php //debug($gallerySidebar) ?>
<div class="side_bar">
	
	<div class="side_bar_title"><?php echo __('Фотогалерея партии')?></div>
	<div class="photo-sliders">
		<div class="photo-slider active">
			<div class="photo-slider-big photo-big">
			<?php foreach($gallerySidebar as $item): ?>
				<img src="/img/gallery/<?=$item['Gallery']['img']?>" alt="<?=$item['Gallery']['title']?>">
			<?php endforeach ?>
			</div>
			<div class="photo-slider-small photo-small">
			<?php foreach($gallerySidebar as $item): ?>
				<div class="slider-smallimg"><img src="/img/gallery/thumbs/<?=$item['Gallery']['img']?>" alt="<?=$item['Gallery']['title']?>"></div>
			<?php endforeach ?>
				
			</div>
		</div>
	</div>
</div>
<section class="slider" >
	<div class="slider__item">
		<a href="news-7.html">
			<img src="img/slider1.png" alt=""></a>
	</div>
	<div class="slider__item">
		<a href="news-5.html">
			<img src="img/slider1.png" alt=""></a>
	</div>
	<div class="slider__item">
		<a href="news-9.html">
			<img src="img/slider1.png" alt=""></a>
	</div>
</section>
<ul class="compani_item_list">
	<li>
		<div class="compani_item_title">
			<h6><?php echo __('Новости предприятия')?></h6>
		</div>
		<div class="compani_item_content">
		<?php foreach($news as $item): ?>
			<div class="news__item">
				<div class="date">
					<?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?>
				</div>
				<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>" class="title_news__item">
					<?=$item['News']['title']?>
				</a>
			</div>
		<?php endforeach ?>
			<a href="/<?=$lang?>news" class="read_more"><span><?php echo __('Архив новостей')?></span></a>
		</div>
	</li>
	<li>
		<div class="compani_item_title">
			<h6><?php echo __('Новости отрасли')?></h6>
		</div>
		<div class="compani_item_content">
			<?php foreach($otrasl as $item): ?>
			<div class="news__item">
				<div class="date">
					<?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?>
				</div>
				<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>" class="title_news__item">
					<?=$item['News']['title']?>
				</a>
			</div>
		<?php endforeach ?>
			
			<a href="" class="read_more"><span><?php echo __('Архив новостей')?></span></a>
		</div>
	</li>
	<li>
		<div class="compani_item_title">
			<h6><?php echo __('Наши сертификаты')?></h6>
		</div>
		<div class="compani_item_content">
			<div class="certificates" >
				<?php foreach($certifications as $item): ?>
					<div class="slider__item">
						<img src="/img/certification/thumbs/<?=$item['Certification']['img']?>"/>
					</div>
				<?php endforeach ?>
			</div>
			<a href="/<?=$lang?>certifications" class="read_more "><span><?php echo __('Архив наград')?></span></a>
		</div>
	</li>
	<li>
		<div class="compani_item_title">
			<h6><?php echo __('Фото предприятия') ?></h6>
		</div>
		<div class="compani_item_content">
			<div class="photo" >
			<?php foreach($albums as $item): ?>
				<div class="slider__item">
					<a href="/<?=$lang?>gallery/<?=$item['Album']['id'] ?>">
						<img src="img/album/thumbs/<?=$item['Album']['img']?>" alt=""></a>
				</div>
				<?php endforeach ?>
			</div>
			<!-- <div class="news__item">
				<a href="" class="title_news__item">
					Название
				</a>
			</div> -->
			
				<a href="" class="read_more photo_and_video_more"><span><?php echo __('Фотогалерея') ?></span></a>
		</div>
	</li>
	<li>
		<div class="compani_item_title">
			<h6><?php echo __('Видео предприятия') ?></h6>
		</div>
		<div class="compani_item_content">
			<div class="video" >
			<?php foreach($videos as $item): ?>
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
				<div class="slider__item">
					<a class="fancybox-media" href="http://www.youtube.com/watch?v=<?=$id?>"><img src="//i.ytimg.com/vi_webp/<?=$id ?>/mqdefault.webp"/></a>
					<p class="heading" href="#"><?=$item['Video']['title'] ?></p>
				</div>
				<?php endforeach ?>
			</div>
			<!-- <div class="news__item">
				<a href="" class="title_news__item">
					Документальный фильм 40 лет ГМЗ
				</a>
			</div> -->
				<a href="" class="read_more photo_and_video_more"><span>Видеогалерея</span></a>
		</div>
	</li>
	<li>
		<div class="compani_item_title">
			<h6>Доска объявлении</h6>
		</div>
		<div class="compani_item_content">
			<?php foreach($doska as $item): ?>
			<div class="news__item">
				<div class="date">
					<?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?>
				</div>
				<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>" class="title_news__item">
					<?=$item['News']['title']?>
				</a>
			</div>
		<?php endforeach ?>
			<a href="" class="read_more "><span>Все объявления</span></a>
		</div>
	</li>
</ul>
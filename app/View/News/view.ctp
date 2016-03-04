<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Остальные новости')?></h2>
	</div>
	<ul class="sidebar_nav">
	<?php foreach($news as $item): ?>
		<li><a href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=$item['News']['title'] ?></a></li>
	<?php endforeach ?>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
		<img class="stat_img" src="/img/news/<?=$post['News']['img']?>"/>
		<div class="content_text">
		<h1><?=$post['News']['title']?></h1>
		<?=$post['News']['body']?>
		</div>
	</div>
</div>
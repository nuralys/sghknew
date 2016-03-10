<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие') ?></h2>
	</div>
	<ul class="sidebar_nav">
		<li>
			<a href="/<?=$lang?>news">
			<?php echo __('Новости предприятия')?></a>
		</li>
		<li>
			<a href="/<?=$lang?>news?category=otrasl">
				<?php echo __('Новости отрасли')?></a>
		</li>
	</ul>
</asside>
<div class="content_container">
	<div class="content">
	<h1>
		<?php echo __('Результаты поиска')?>
	</h1>
		<ul class="news_list_item">
		<?php //debug($search_res) ?>
		<?php if(is_array($search_res)): ?>
			<?php if(empty($search_res)): ?>
				<li><?php echo __('По данному запросу 0 результатов')?>...</li>
			<?php endif ?>
			<?php foreach($search_res as $item): ?>
			<li>
				<div class="date">
					<?php echo $this->Time->format($item['news']['date'], '%d.%m.%Y', 'invalid'); ?>
				</div>
				<a  href="/<?=$lang?>news/view/<?=$item['news']['id']?>" class="title_news__item">
					<?=$item['news']['title'] ?>
				</a>
				<p><?= $this->Text->truncate(strip_tags($item['news']['body']), 225, array('ellipsis' => '...', 'exact' => true)) ?></p>
			</li>
			<?php endforeach ?>
			<?php else: ?>
				<li><?php echo $search_res ?></li>
			<?php endif ?>
		</ul>
	</div>
</div>

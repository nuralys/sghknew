<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие') ?></h2>
	</div>
	<ul class="sidebar_nav">
		<li <?php if( !$this->request->query('category') ) {echo "class='active'";} ?>>
			<a href="/<?=$lang?>news">
			<?php echo __('Новости предприятия')?></a>
		</li>
		<li <?php if( $this->request->query('category') == 'otrasl' ) {echo "class='active'";} ?>>
			<a href="/<?=$lang?>news?category=otrasl">
				<?php echo __('Новости отрасли')?></a>
		</li>
	</ul>
</asside>
<div class="content_container">
	<div class="content">
		<ul class="news_list_item">
		<?php foreach ($data as $item) : ?>
			<li>
				<div class="date">
					<?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?>
				</div>
				<a  href="/<?=$lang?>news/view/<?=$item['News']['id']?>" class="title_news__item">
					<?=$item['News']['title'] ?>
				</a>
				<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 225, array('ellipsis' => '...', 'exact' => true)) ?></p>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
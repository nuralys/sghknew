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
		<div class="gallery">
			<h2><?php echo __('Клиенты') ?></h2>
			<ul class="gallery_ul">
				<?php if(empty($data)): ?>
					<p>В данном разеде еще нету информации</p> 
				<?php else: ?>
					<?php foreach ($data as $item) :?>
						<li>
							<img src="/img/client/thumbs/<?=$item['Client']['img'] ?>" />
					    </li>
			    	<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>	
	</div>
</div>			
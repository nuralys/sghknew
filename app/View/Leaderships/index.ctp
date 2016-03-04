<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие') ?></h2>
	</div>
	<ul class="sidebar_nav">
		<li class="active"><a href="/<?=$lang?>leaderships">Руководство</a></li>
		<li><a href="/<?=$lang?>certifications">Лицензии и сертификаты</a></li>
		<li><a href="/<?=$lang?>page/vacancy">Вакансии</a></li>
		<li><a href="/<?=$lang?>page/history">История</a></li>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
		<ul class=" rukovodstvo">
		<?php foreach($data as $item): ?>
			<li>
				<a  href="/<?=$lang?>leaderships/view/<?=$item['Leadership']['id'] ?>" class="title_news__item">
					<?=$item['Leadership']['title'] ?>
				</a>
				<div class="leader_img">
					<a href=""><img src="/img/leadership/thumbs/<?=$item['Leadership']['img'] ?>" alt="<?=$item['Leadership']['title'] ?>"></a>
				</div>
				<div class="position">
					<?php echo __('Занимаемая должность')?>: <?=$item['Leadership']['position'] ?>
				</div>
				<div class="date_birth">
					<?php echo __('Дата рождения')?>: <?=$item['Leadership']['date_berth'] ?>
				</div>
				<p><?= $this->Text->truncate(strip_tags($item['Leadership']['body']), 290, array('ellipsis' => '...', 'exact' => true)) ?></p>
				<a href="/<?=$lang?>leaderships/view/<?=$item['Leadership']['id'] ?>" class="read_more"><span><?php echo __('Читать далее')?></span></a>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>	
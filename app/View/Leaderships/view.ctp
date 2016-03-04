<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие') ?></h2>
	</div>
	<ul class="sidebar_nav">
		<li class="active"><a href="/<?=$lang?>leaderships"><?php echo __('Руководство') ?></a></li>
		<li><a href="/<?=$lang?>certifications"><?php echo __('Лицензии и сертификаты') ?></a></li>
		<li><a href="/<?=$lang?>page/vacancy"><?php echo __('Вакансии') ?></a></li>
		<li><a href="/<?=$lang?>page/history"><?php echo __('История') ?></a></li>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
		<div class=" rukovodstvo_item">
				<a  href="" class="title_news__item">
					<?=$data['Leadership']['title'] ?>
				</a>
				<div class="leader_img">
					<img src="/img/leadership/thumbs/<?=$data['Leadership']['img'] ?>" alt="<?=$data['Leadership']['title'] ?>">
				</div>
				<div class="info_lider">
					<div class="position">
						<?php echo __('Занимаемая должность')?>:</b> <?=$data['Leadership']['position'] ?>
					</div>
					<div class="date_birth">
						<?php echo __('Дата рождения')?>:</b> <?=$data['Leadership']['date_berth'] ?>
					</div>
					<?=$data['Leadership']['body'] ?>
				</div>
		</div>
	</div>
</div>
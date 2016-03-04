<asside class="left_asside">
	<div class="compani_item_title">
		<h2><?php echo __('Предприятие') ?></h2>
	</div>
	<ul class="sidebar_nav">
		<li><a href="/<?=$lang?>leaderships"><?php echo __('Руководство')?></a></li>
		<li><a href="/<?=$lang?>certifications"><?php echo __('Лицензии и сертификаты')?></a></li>
		<li class="active"><a href="/<?=$lang?>page/vacancy"><?php echo __('Вакансии')?></a></li>
		<li><a href="/<?=$lang?>page/history"><?php echo __('История')?></a></li>
	</ul>
</asside>		
<div class="content_container">
	<div class="content">
		<div id="wrapper">
			<ul class="license_list">
				<?php echo $page['Page']['body'] ?>
			</ul>		
		</div>
	</div>
</div>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title_for_layout ?> | СГХК</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/slide.css">
		<script type="text/javascript" src="/js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css?v=2.1.5" media="screen" />

		<script type="text/javascript" src="/js/script.js"></script>
		
	</head>	
	<body>
		<div class="main">
			<?=$this->element('header')?>
			
			<div class="container">
				<div class="cr">
				<?php echo $this->fetch('content') ?>
				</div>
			</div>

			<?=$this->element('footer')?>	
			<div class="mob_part">
				<ul class="mob_ul">
					<li ><a href="/"><?= __('Главная')?></a></li>
					<li><a href="/<?=$lang?>news"><?= __('Новости')?></a></li>
					<li class="m_sub ">
						<p>Предприятия</p>
							<ul class="m_undersub">
								<li><a href="/<?=$lang?>leaderships"><?= __('Руководство')?></a></li>
								<li><a href="/<?=$lang?>certifications"><?= __('Лицензии и сертификаты')?></a></li>
								<li><a href="/<?=$lang?>page/vacancy"><?= __('Вакансии')?></a></li>
								<li><a href="/<?=$lang?>page/history"><?= __('История')?></a></li>
							</ul>
					</li>
					<li><a href="/<?=$lang?>page/products"><?= __('Продукция')?></a></li>
					<li><a href="/<?=$lang?>page/clents"><?= __('Клиенты')?></a></li>
					<li class="m_sub">
						<p>Галерея</p>
							<ul class="m_undersub">
								<li><a href="/<?=$lang?>albums/1"><?= __('Трудовые будни')?></a></li>
								<li><a href="/<?=$lang?>albums/2"><?= __('Отдых')?></a></li>
								<li><a href="/<?=$lang?>albums/3"><?= __('Спорт')?></a></li>
								<li><a href="/<?=$lang?>videos"><?= __('Видео')?></a></li>
							</ul>
					</li>
					<li><a href="/<?=$lang?>page/contacts"><?= __('Контакты')?></a></li>
					<li><a href="/<?=$lang?>page/structure">Структура 
					отрасли</a></li>
					<li ><a href="#modal1" class="open_modal">Обратный звонок</a></li
				</ul>
				<div class="int_row mob_row">
							<button type="submit" class="sub_but"></button>
							<input type="text" name="data[Credit][name]" placeholder="Поиск по сайту">
							<span></span>

						</div>
				<div class="mob_close"></div>
			</div>
		</div>
		<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
		<span class="modal_close">*</span>
			<div class="logo"><img src="/img/logo.png" alt=""></div>
		<div class="title_z">Обратный звонок</div>

			<form method="POST" name="form1" action="form.php" >
				<input  name="name"  maxlength="200" class="modal_f" type="text" size="1"  required placeholder="ФИО*"/>
				<input  name="number"  maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Номер*"/>
				<button type="submit"  name="submit1" >Отправить</button>
			</form>
		</div>
		<div id="overlay"></div>
	</body>
</html>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title_for_layout ?> | СГХК</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/slide.css">
		<script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css?v=2.1.5" media="screen" />

		<script type="text/javascript" src="js/script.js"></script>
		
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
					<li ><a href="">Главная</a></li>
					<li ><a href="">Новости</a></li>
					<li class="m_sub ">
						<p>Предприятия</p>
							<ul class="m_undersub">
								<li><a href="">Руководство</a></li>
								<li><a href="">Лицензии и сертификаты</a></li>
								<li><a href="">Вакансии</a></li>
								<li><a href="">История</a></li>
							</ul>
					</li>
					<li><a href="">Продукция</a></li>
					<li ><a href="">Партнеры</a></li>
					<li class="m_sub">
						<p>Галерея</p>
							<ul class="m_undersub">
								<li><a href="">Трудовые будни</a></li>
								<li><a href="">Отдых</a></li>
								<li><a href="">Спорт</a></li>
								<li><a href="">Видео</a></li>
							</ul>
					</li>
					<li><a href="">Контакты</a></li>
					<li><a href="">Структура 
					отрасли</a></li>
					<li ><a href="">Обратный звонок</a></li
				</ul>
				<div class="int_row mob_row">
							<button type="submit" class="sub_but"></button>
							<input type="text" name="data[Credit][name]" placeholder="Поиск по сайту">
							<span></span>

						</div>
				<div class="mob_close"></div>
			</div>
		</div>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">
		 $(document).ready(function() {
			$('.multiple-items').slick({
			  infinite: true,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			   responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			});			
			$('.awards_c').slick({
			  infinite: true,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			   responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2

			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 2

			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 450,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			});
			$('.partners-items').slick({
			  infinite: true,
			  slidesToShow: 5,
			  slidesToScroll: 2,
			  responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 4
			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1

			      }
			    },
			    {
			      breakpoint: 450,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    ]
			});	
			$('.sertificates-items	').slick({
			  infinite: true,
			  slidesToShow: 8,
			  slidesToScroll: 2,
			  responsive: [
			    {
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 6,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 2

			      }
			    },
			    {
			      breakpoint: 660,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1

			      }
			    },
			    {
			      breakpoint: 450,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    }
			    ]
			});						
		 })
		</script>
	</body>
</html>
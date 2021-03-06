<header>
				<div class="cr">
					<div class="m_menu"></div>
					<figure>
						<a href="/">
							<img src="/img/logo.png"/>
						</a>
					</figure>

					<div class="right_t">
						<div class="r_t">
							<ul class="lang">
								<li <?php echo (Configure::read('Config.language')=='kz') ? "class='active'" : "" ?>><a href="/kz">kz</a></li>
								<li <?php echo (Configure::read('Config.language')=='ru') ? "class='active'" : "" ?>><a href="/ru">ru</a></li>
							</ul>
							<select class="lang_m">
								<option <?php echo (Configure::read('Config.language')=='kz') ? "selected" : "" ?>>Каз</option>
								<option <?php echo (Configure::read('Config.language')=='ru') ? "selected" : "" ?>>Рус</option>
							</select>
							<div class="int_row clearfix">
							<form action="/search" method="GET">
							<button type="submit" class="sub_but"></button>
							<input type="text" name="q" placeholder="<?= __('Поиск по сайту')?>">
							<span></span>
						</form>
						</div>
						</div>
						
					</div>
					<div class="stuc_call_back">
						<a href="/<?=$lang?>page/structure" class="structure"><?= __('Структура
					отрасли')?></a>
											<a href="#modal1" class="open_modal call_back "><?= __('Обратный звонок')?></a>
					</div>
					<div class="r_down">
							<nav>
								<ul class="nav">
									<li class="active"><a href="/"><?= __('Главная')?></a></li>
									<li><a href="/<?=$lang?>news"><?= __('Новости')?></a></li>
									<li class="sub">
										<a href="#"><?= __('Предприятие')?></a>
										<div class="frame">
											<ul class="sub_ul">
												<li><a href="/<?=$lang?>leaderships"><?= __('Руководство')?></a></li>
												<li><a href="/<?=$lang?>certifications"><?= __('Лицензии и сертификаты')?></a></li>
												<li><a href="/<?=$lang?>page/vacancy"><?= __('Вакансии')?></a></li>
												<li><a href="/<?=$lang?>page/history"><?= __('История')?></a></li>
											</ul>
										</div>
									</li>
									<li><a href="/<?=$lang?>page/products"><?= __('Продукция')?></a></li>
									<li><a href="/<?=$lang?>clients"><?= __('Клиенты')?></a></li>
									<li class="sub">
										<a ><?= __('Галерея')?></a>
										<div class="frame">
											<ul class="sub_ul">
												<li><a href="/<?=$lang?>albums/1"><?= __('Трудовые будни')?></a></li>
												<li><a href="/<?=$lang?>albums/2"><?= __('Отдых')?></a></li>
												<li><a href="/<?=$lang?>albums/3"><?= __('Спорт')?></a></li>
												<li><a href="/<?=$lang?>videos"><?= __('Видео')?></a></li>
											</ul>
										</div>
									</li>
									<li><a href="/<?=$lang?>page/contacts"><?= __('Контакты')?></a></li>
								</ul>
							</nav>
						</div>
				</div>
			</header>
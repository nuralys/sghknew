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
								<li><a href="#">kz</a></li>
								<li class="active"><a href="#">ru</a></li>
							</ul>
							<select class="lang_m">
								<option>Каз</option>
								<option>Рус</option>
							</select>
							<div class="int_row clearfix">
							<button type="submit" class="sub_but"></button>
							<input type="text" name="data[Credit][name]" placeholder="<?= __('Поиск по сайту')?>">
							<span></span>

						</div>
						</div>
						
					</div>
					<div class="stuc_call_back">
						<a href="/<?=$lang?>page/structure" class="structure"><?= __('Структура
					отрасли')?></a>
											<a href="" class="call_back open_modal"><?= __('Обратный звонок')?></a>
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
									<li><a href="#"><?= __('Клиенты')?></a></li>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ОС</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="/js/main.js"></script>
</head>
<body>
	<div class="main">
		<div class="display-border-top">
			
		</div>
		<div class="display">
				<div class="terminal">
					<div class="terminal-cover">
						<div class="oc-taskpanel">
							<div class="oc-taskpanel-left"></div>
							<div class="oc-taskpanel-right">
								<div class="taskpanel-icon icon-1"><span><i class="fa fa-cog" aria-hidden="true"></i> Options</span></div>
								<div class="taskpanel-icon icon-2"><span>Saint-Petersburg</span></div>
								<div class="taskpanel-icon icon-3"><span id="icon-temp"></span></div>
								<div class="taskpanel-icon icon-4"><span id="icon-time"></span></div>
								<div class="taskpanel-icon icon-5"><span><i class="fa fa-volume-down" aria-hidden="true"></i></span></div>
								<div class="taskpanel-icon icon-6"><span id="icon-lang">RU</span></div>
								<div class="taskpanel-icon icon-7" onclick="changePopupExit();"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span></div>
							</div>
						</div>
						<div class="oc-workspace">
							<div class="oc-row-items">
								<div class="oc-row-item" data-id="console"><img src="/images/console.png" class="item-icon"><p>console</p></div>
								<div class="oc-row-item" data-id="folder"><img src="/images/folder.png"><p>Internet</p></div>
							</div>
							<div class="window window-console window-closed" data-id="console">
								<div class="widow-header">
									<div class="widow-header-logo">~$root/console</div>
									<div class="window-header-buttons" data-id="console">
										<i class="fa fa-times" aria-hidden="true"></i>
									</div>
								</div>
								<div class="widow-workspace">
									<div class="console-img">
										<p>
											⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠻⠿⠛⠻⠿⠛⠛⣿⡿⣿⣿⣿⣿⣿⣿⣿<br>
											⣿⣿⣿⣿⣿⣿⣿⣿⠿⠟⠛⠉⣁⠄⢠⣦⡀⠄⢀⣾⡀⠄⡄⠘⡫⠹⢿⣿⣿⣿<br>
											⣿⣿⣿⣿⣿⣿⡿⠋⠁⠄⣶⡄⣿⣧⣾⣿⣷⣾⣿⣿⣧⣾⣧⣾⠇⠄⡄⠹⣿⣿<br>
											⣿⣿⣿⣿⠟⠁⢒⣺⣶⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⣠⣾⡇⣰⢹⣿<br>
											⣿⣿⣿⠐⠚⣿⣿⣿⣿⣿⡿⠟⠉⠄⠄⠄⠄⠄⠄⠄⠄⠉⠉⠛⠻⣯⣾⣯⣿⣿<br>
											⣿⣿⠏⣠⣾⣿⣿⣿⣿⣿⠁⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠹⣿⣿⣿<br>
											⣿⠏⣰⡿⣿⣿⣿⣿⣿⣿⣄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⣿⣿⣿<br>
											⡟⠰⠋⣼⢿⣿⣿⣿⣿⣿⠟⠄⠄⢀⣠⣤⣴⣶⣶⣶⣤⣴⣀⠄⣀⣀⠄⢹⣿⣿<br>
											⣧⠄⡜⢡⣾⣿⣿⣿⣿⣏⣠⣴⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⣿⣿<br>
											⣿⡈⢀⠟⢁⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠃⠈⣿⣿⣿⣿⣿⣿<br>
											⣿⣧⡈⣠⣄⠉⠻⢿⣿⠄⠄⠄⠄⠉⠙⠛⠻⠿⠿⠿⠋⠄⠄⠄⣈⠻⣿⣟⣹⣿<br>
											⣿⣿⣇⠟⣈⣧⡔⠄⠈⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠠⣶⣿⣿⣿⠄⠻⠅⣿⣿<br>
											⣿⣿⣿⡠⡛⠩⠷⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠈⢃⠄⠄⠄⣿⣿<br>
											⣿⣿⣿⣷⡉⢁⣀⡠⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⣠⠴⠖⠛⠓⠚⢆⠄⣸⣿⣿<br>
											⣿⣿⣿⣿⣿⠄⠉⠁⠄⢀⣀⣀⣀⡀⠄⠄⠄⠄⠈⠄⠄⣴⣿⠿⣷⠊⢣⣿⣿⣿<br>
											⣿⣿⣿⣿⣿⠄⠄⢀⡙⢮⣻⣿⣿⣧⣤⣶⣶⣤⣀⠄⠄⠄⣀⣀⡀⠄⠄⣿⣿⣿<br>
											⣿⣿⣿⡿⣟⣀⡀⠄⠙⢦⡙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄⣰⣿⣿⣿<br>
											⣿⣿⣿⠃⣍⡉⠛⢦⠳⣄⠉⠳⣝⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⣋⣠⣶⣿⣿⣿⣿<br>
											⣿⣿⡃⠄⠘⣿⣷⣤⣳⡘⣿⣦⡈⠛⢿⣿⣿⣿⣿⣿⡏⢠⣿⣿⣿⣿⣿⣿⣿⣿<br>
											⢿⣿⣿⣷⣦⣽⣿⣿⣿⣷⡈⢿⣿⣷⣦⣜⣿⣿⣿⣿⡇⢸⣿⣿⣿⣿⣿⣿⣿⣿<br>
											⣿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣌⣿⣿⣿⣿⣿⣿⣿⣿⣷⣮⣛⠿⣿⣿⣿⣿⣿⣿<br>
											⣿⡎⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢿⣯⡉⠙⢻⣷⣮⣍⡻⢿⣿⣿<br>
											⣿⣿⡈⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣇⠙⣿⠆⢸⣿⣿⣿⣿⣶⣬⣛<br>
										</p>
									</div>
									<div class="console-text">
										<p>
											root@starilov<br>
											-------------<br>
											<span>Age:</span> 22 years<br>
											<span>Name:</span> Anton<br>
											<span>Second name:</span> Starilov<br>
											<span>Email:</span> antonstarilov@yandex.ru<br>
											<span>Githab link:</span> <a href="https://github.com/starilov-a">https://github.com/starilov-a</a><br>
											-------------<br>
											<span>Programming experience:</span> 1.5 years<br>
											<span>Programming languages:</span> PHP / JS / SQL<br>
											-------------<br>
											<span>About me:</span> Я, Старилов Антон Владимирович, являюсь веб-разработчиком на языке PHP и JS. 
											Опыт с web-проектами с 2019 года. Ранее помогал в SEO продвижении сайтов и параллельно разбирался с CMS платформами. Но понял, что интересно более глубокое понимание работы интернет-магазинов и интернет-сервисов. Именно поэтому с конца 2020 года стал изучать PHP и JS. В 2021-2020 году устроился стажером/junior'ом в компанию занимающуюся интернет маркетингом Denero.<br>
										</p>
									</div>
								</div>
							</div>
							<div class="window window-folder window-closed" data-id="folder">
								<div class="widow-header">
									<div class="widow-header-logo">INTERNET</div>
									<div class="window-header-buttons" data-id="folder">
										<i class="fa fa-times" aria-hidden="true"></i>
									</div>
								</div>
								<div class="widow-workspace">
									<div class="web-browser">
										<div class="browser-header">
											<div class="browser-page-title browser-page-title-active" data-id="index"><span>Главная</span></div>
										</div>
										<div class="browser-workspace">
											<div class="browser-index browser-workspace-enable">
												<p class="browser-text">
													Опыт с реальными проектами отражен в работе с сайтами: pandora-led.ru, kremnica.ru, al-akb.ru и plusprotect.ru. <br><br>
													На предыдущем месте работы в первую очередь ценились строгая логика, дополнение/изменение уже существующего функционала и оптимизация имеющегося кода. В приоритете было процедурное программирование(но в сущности всё зависило от ситуации, главное - строгая логика и оптимальный вариант решения предоставленной задачи). Некоторые из проектов были высоконагруженными системами с большой посещяемостью. 
												</p>
												<ul>
													<li data-id="php" onclick="addBrowserTab(this.dataset.id);return false;">→ PHP</li>
													<li data-id="js" onclick="addBrowserTab(this.dataset.id);return false;">→ JS</li>
													<li data-id="sql" onclick="addBrowserTab(this.dataset.id);return false;">→ SQL</li>
													<li data-id="other" onclick="addBrowserTab(this.dataset.id);return false;">→ Other</li>
												</ul>
											</div>
											<div class="browser-php browser-workspace-disable">
												<p class="browser-text">
													Особенности работы с PHP:<br><br>
													1. Создание парсера для вывод информации на странице товара. В админке сайта поле с произвольной вставкой текста с html тегами должно было выводится в отформатированным. При реализации использовались регулярные выражения.<br>
													2. Оптимизация кода в высоконагруженых системах. Переписывание взаимодействия с данными из БД - группировка данных при извлечении из БД и доработка логики.<br>
													3. Оптимизация и первичная настройка после переноса сайта на другой сервер. Оперативный поиск проблем с задержкой работы - анализ исходящих запросов к удалённым сервесам и оптимизация взаимодействия с БД.<br>
													4. Помощь в написании функционала геопозиции для маркетинговых целей.<br>
													5. Настройка фильтров и поиска по каталогу товаров. Работа с корзиной по средставм js(ajax) - актуализация данных.<br>
													6. Создание автоматической yml выгрузки товаров. <br>
													7. Интеграция YooKassa через плагины и решенеи проблем возникших в процессе реализации. Актуализация кода плагина для корректной работы.<br>
													8. Работа с MVC архитектурой сайта и с архитектурой, в которой backend и frontend разделен по API.<br>
													9. Решение задачи с выводом товаров на одном сайте из БД другого. Полная адаптация подтянутой структуры данных. Налаживание поиска и фильтрации товаров, настройка корзины и обратной связи. 
												</p>
											</div>
											<div class="browser-js browser-workspace-disable">
												<p class="browser-text">
													Особенности работы с JS:<br><br>
													1. Рефакторинг и доработка чужого кода(слайдеры, отправки форм, карты и тд).<br>
													2. Настройки и создание асинхронных запросов. <br>
													3. Подключение инструментов google для сбора статистики (веб-отслеживание analistic.js).<br>
													4. Взаимодействие c WORDPRESS REST API.<br>
													5. Работа с нативным js. В некоторых слуаях переписывание JQuery на нативынй лад.<br>
												</p>
											</div>
											<div class="browser-sql browser-workspace-disable">
												<p class="browser-text">
													Особенности работы с SQL:<br>
													1. Оптимизация страниц сайта за счет сокращения кол-ва SQL запросов. Обьединение SQL запросов и изменение структуры выводимых данных.<br>
													2. Переписывание звпросов для каталога и добавление фильтров.<br>
													3. Написание производительных запросов.<br>
												</p>
											</div>
											<div class="browser-other browser-workspace-disable">
												<p class="browser-text">
													Другое: <br><br>
													1. Адаптиваня верста без использования flex и grid. Адаптивная верста с использованием flex и grid.<br>
													2. Работа с git (bitbucket)<br>
													3. Развертывание проектов на локальном сервере (nginx+apache+memcache)<br>
													4. Работа в project management<br>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="window-exit" >
								<div class="widow-header-exit">
									<div class="widow-header-logo">Exit</div>
									<div class="window-exit-header-buttons" onclick="changePopupExit();">
										<i class="fa fa-times" aria-hidden="true"></i>
									</div>
								</div>
								<div class="widow-workspace">
									<div class="question-exit"><p>Do you really want EXIT?</p></div>
									<div class="question-exit-btns">
										<button class="exit-btn-yes" onclick="changePopupExit();window.close();">YES</button>
										<button class="exit-btn-no" onclick="changePopupExit();return false;">NO</button>
									</div>
								</div>
							</div>
							

						</div>
					</div>
				</div>
		</div>
		<div class="display-border-bottom">
			<div class="display-lable">
			</div>
			<div class="display-bottom">
				<div class="display-bottom-box">
					<div class="display-bottom-lable">
						ПУСК
					</div>
					<div class="display-bottom-fire">
						<p class="button-on-off"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
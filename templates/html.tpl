<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>City State - Vladivostok</title>
	<meta charset="utf-8"/>
	<link href="/css/style.css" rel="stylesheet" />
	<link href="/css/main.css" rel="stylesheet" />
	<script src="/js/jquery.js"></script>
	<script src="/js/script.js"></script>
</head>
<body>
	<header>
		<img src="images/logo.png" class="logo" />
		<nav>
			<ul>
				<li><a href="#">Новости</a></li><li><a href="#">Погода</a></li><li><a href="#">Обзоры</a></li><li><a href="#">Статьи</a></li><li><a href="#">Информация</a></li><li><a href="#">Азия</a></li>
			</ul>
		</nav>
	</header>
	<div id="main">
		<div id="left_top">
			<section id="news" class="block">
				<h1>Новости</h1>
				{foreach from=$news item=new}
					<article>
						<a href="{$new['href']}"><img src="{$new['img']}" /></a>
						<time datetime="{$new['date']}">{$new['date']}</time>
						<h1><a href="{$new['href']}">{$new['header']}</a></h1>
					</article>
				{/foreach}
			</section>
		</div>
		<div id="right_top">
			<section id="courses" class="block">
				<h1>Курсы валют</h1>
				<ul>
					<li>
						<span class="icon">$</span>
						<span class="value">{$currencies['USD']}</span>
					</li><li>
						<span class="icon">€</span>
						<span class="value">{$currencies['EUR']}</span>
					</li><li>
						<span class="icon">CNY</span>
						<span class="value">{$currencies['CNY']}</span>
					</li><li>
						<span class="icon">¥</span>
						<span class="value">{$currencies['JPY']}</span>
					</li>
				</ul>
			</section>
			<section id="cinfffema" class="block">
				
			</section>
		</div>
		<section id="weather" class="block">
			<h1>Погода</h1>
			<ul>
				{foreach from=$weather item=day}
					<li>
						<img src="{$day['icon']}" />
						<span class="deg">{$day['temperature']}</span>
						<span>{$day['week_date']}</span>
					</li>
				{/foreach}
			</ul>
		</section>
		<section id="cinema" class="block">
			<h1>Кино</h1>
			<ul id="cinema_list">
				<li class="active" data="1">Тор 2: Царство тьмы</li>
				<li data="2">Облачно, возможны осадки: Месть ГМО</li>
				<li data="3">Тор 2: Царство тьмы</li>
				<li data="4">Облачно, возможны осадки: Месть ГМО</li>
				<li data="5">Тор 2: Царство тьмы</li>
				<li data="6">Облачно, возможны осадки: Месть ГМО</li>
			</ul>
			<article class="curfilm" id="film1">
				<h1><a href="#">Тор 2: Царство тьмы</a></h1>
				<img src="http://kino.vl.ru/kino/images/kinopoisk.ruthor_3athedarkworld2225885.jpg" />
				<div class="right">
					<span class="genre">Жанр: фэнтези, боевик, приключения</span>
					<p>Реж.: Алан Тейлор. В ролях: Крис Хемсворт, Натали Портман, Том Хиддлстон, Энтони Хопкинс, Кэт Деннингс, Идрис Эльба, Крис О’Дауд, Закари Левай, Рэй Стивенсон, Адевале Акинойе-Агбаже.</p>			
					<a href="#">Показать все сеансы</a>
				</div>
				<ul class="times">
					<li><span class="time">21:00</span>
						<a href="#" class="place">Нептун</a>
						<span class="place_place">Зал Нептун</span>
					</li>
					<li><span class="time">17:00</span>
						<a href="#" class="place">Нептун</a>
						<span class="place_place">Зал Нептун</span>
					</li>
					<li><span class="time">17:00</span>
						<a href="#" class="place">Нептун</a>
						<span class="place_place">Зал Нептун</span>
					</li>
					<li><span class="time">17:00</span>
						<a href="#" class="place">Нептун</a>
						<span class="place_place">Зал Нептун</span>
					</li><li><span class="time">17:00</span>
						<a href="#" class="place">Нептун</a>
						<span class="place_place">Зал Нептун</span>
					</li>
				</ul>
			</article>
			<article class="curfilm" id="film2">
				<h1><a href="#">Тор 2: Царство тьмы</a></h1>
				<img src="http://kino.vl.ru/kino/images/kinopoisk.ruthor_3athedarkworld2225885.jpg" />
			</article>
			<article class="curfilm" id="film3">
				<h1><a href="#">Тор 2: Царство тьмы</a></h1>
				<img src="http://kino.vl.ru/kino/images/kinopoisk.ruthor_3athedarkworld2225885.jpg" />
				<div class="right">
					<span class="genre">Жанр: фэнтези, боевик, приключения</span>
					<p>Реж.: Алан Тейлор. В ролях: Крис Хемсворт, Натали Портман, Том Хиддлстон, Энтони Хопкинс, Кэт Деннингс, Идрис Эльба, Крис О’Дауд, Закари Левай, Рэй Стивенсон, Адевале Акинойе-Агбаже.</p>			
					<a href="#">Показать все сеансы</a>
				</div>
			</article>
			<article class="curfilm" id="film4">
				<h1><a href="#">Тор 2: Царство тьмы</a></h1>
			</article>
		</section>
	</div>
</body>
</html>
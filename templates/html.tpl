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
				{foreach from=$movies item=movie name=foo}
					<li data="{$smarty.foreach.foo.index}">{$movie.name}</li>
				{/foreach}
			</ul>
			{foreach from=$movies item=movie name=foo1}
				<article class="curfilm" id="film{$smarty.foreach.foo1.index}">
					<h1><a href="{$movie.film_href}">{$movie.name}</a></h1>
					<img src=" {$movie.icon}" />
					<div class="right">
						<span class="genre">Жанр: {$movie.genre}</span>
						<p>
							Реж.: {$movie.director}. В ролях: {$movie.actors}.
						</p>			
						<a href="{$movie.other_seances_href}">Показать все сеансы</a>
					</div>
					<ul class="times">
						{foreach from=$movie.seances item=seance}
							<li>
								<span class="time">{$seance.time}</span>
								<a href="{$seance.cinema_url}" class="place">{$seance.cinema}</a>
								<span class="place_place">{$seance.hall}</span>
							</li>
					    {/foreach}
					</ul>
				</article>
			{/foreach}
		</section>
	</div>
</body>
</html>
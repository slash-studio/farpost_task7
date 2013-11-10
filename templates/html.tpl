<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>City State - Vladivostok</title>
	<meta charset="utf-8"/>
	<link href="/css/style.css" rel="stylesheet" />
	<link href="/css/main.css" rel="stylesheet" />
	<script src="/js/script.js"></script>
	<script src="/js/jquery.js"></script>
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
	</div>
</body>
</html>
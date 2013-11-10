<?php /* Smarty version Smarty-3.1.13, created on 2013-11-10 06:40:24
         compiled from "Z:\home\task7.su\www\templates\html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27606527f2a580ff405-86308840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6203f55417d6cbff1c8978587748657988bac4d9' => 
    array (
      0 => 'Z:\\home\\task7.su\\www\\templates\\html.tpl',
      1 => 1384065616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27606527f2a580ff405-86308840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'new' => 0,
    'currencies' => 0,
    'weather' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527f2a58198253_43334132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527f2a58198253_43334132')) {function content_527f2a58198253_43334132($_smarty_tpl) {?><!DOCTYPE HTML>
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
		<div id="left_top">
			<section id="news" class="block">
				<h1>Новости</h1>
				<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
					<article>
						<a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['href'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['new']->value['img'];?>
" /></a>
						<time datetime="<?php echo $_smarty_tpl->tpl_vars['new']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['date'];?>
</time>
						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['header'];?>
</a></h1>
					</article>
				<?php } ?>
			</section>
		</div>
		<div id="right_top">
			<section id="courses" class="block">
				<h1>Курсы валют</h1>
				<ul>
					<li>
						<span class="icon">$</span>
						<span class="value"><?php echo $_smarty_tpl->tpl_vars['currencies']->value['USD'];?>
</span>
					</li><li>
						<span class="icon">€</span>
						<span class="value"><?php echo $_smarty_tpl->tpl_vars['currencies']->value['EUR'];?>
</span>
					</li><li>
						<span class="icon">CNY</span>
						<span class="value"><?php echo $_smarty_tpl->tpl_vars['currencies']->value['CNY'];?>
</span>
					</li><li>
						<span class="icon">¥</span>
						<span class="value"><?php echo $_smarty_tpl->tpl_vars['currencies']->value['JPY'];?>
</span>
					</li>
				</ul>
			</section>
			<section id="cinfffema" class="block">
				
			</section>
		</div>
		<section id="weather" class="block">
			<h1>Погода</h1>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weather']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
					<li>
						<img src="<?php echo $_smarty_tpl->tpl_vars['day']->value['icon'];?>
" />
						<span class="deg"><?php echo $_smarty_tpl->tpl_vars['day']->value['temperature'];?>
</span>
						<span><?php echo $_smarty_tpl->tpl_vars['day']->value['week_date'];?>
</span>
					</li>
				<?php } ?>
			</ul>
		</section>
		<section id="cinema" class="block">
			<h1>Кино</h1>
			<ul id="cinema_list">
				<li class="active" data="1">Тор 2: Царство тьмы</li>
				<li data="1">Облачно, возможны осадки: Месть ГМО</li>
				<li data="1">Тор 2: Царство тьмы</li>
				<li data="1">Облачно, возможны осадки: Месть ГМО</li>
				<li data="1">Тор 2: Царство тьмы</li>
				<li data="1">Облачно, возможны осадки: Месть ГМО</li>
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
		</section>
	</div>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-11-10 07:15:06
         compiled from "Z:\home\task7.su\www\templates\html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11157527f327a1e3278-37490898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6203f55417d6cbff1c8978587748657988bac4d9' => 
    array (
      0 => 'Z:\\home\\task7.su\\www\\templates\\html.tpl',
      1 => 1384067654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11157527f327a1e3278-37490898',
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
    'movies' => 0,
    'movie' => 0,
    'seance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527f327a2f2ea6_82420775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527f327a2f2ea6_82420775')) {function content_527f327a2f2ea6_82420775($_smarty_tpl) {?><!DOCTYPE HTML>
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
				<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
					<li data="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</li>
				<?php } ?>
			</ul>
			<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo1']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo1']['index']++;
?>
				<article class="curfilm" id="film<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo1']['index'];?>
">
					<h1><a href="<?php echo $_smarty_tpl->tpl_vars['movie']->value['film_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a></h1>
					<img src=" <?php echo $_smarty_tpl->tpl_vars['movie']->value['icon'];?>
" />
					<div class="right">
						<span class="genre">Жанр: <?php echo $_smarty_tpl->tpl_vars['movie']->value['genre'];?>
</span>
						<p>
							Реж.: <?php echo $_smarty_tpl->tpl_vars['movie']->value['director'];?>
. В ролях: <?php echo $_smarty_tpl->tpl_vars['movie']->value['actors'];?>
.
						</p>			
						<a href="<?php echo $_smarty_tpl->tpl_vars['movie']->value['other_seances_href'];?>
">Показать все сеансы</a>
					</div>
					<ul class="times">
						<?php  $_smarty_tpl->tpl_vars['seance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie']->value['seances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seance']->key => $_smarty_tpl->tpl_vars['seance']->value){
$_smarty_tpl->tpl_vars['seance']->_loop = true;
?>
							<li>
								<span class="time"><?php echo $_smarty_tpl->tpl_vars['seance']->value['time'];?>
</span>
								<a href="<?php echo $_smarty_tpl->tpl_vars['seance']->value['cinema_url'];?>
" class="place"><?php echo $_smarty_tpl->tpl_vars['seance']->value['cinema'];?>
</a>
								<span class="place_place"><?php echo $_smarty_tpl->tpl_vars['seance']->value['hall'];?>
</span>
							</li>
					    <?php } ?>
					</ul>
				</article>
			<?php } ?>
		</section>
	</div>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-11-10 03:48:16
         compiled from "Z:\home\task7.su\www\templates\html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16300527f0200416cd7-02472881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6203f55417d6cbff1c8978587748657988bac4d9' => 
    array (
      0 => 'Z:\\home\\task7.su\\www\\templates\\html.tpl',
      1 => 1384055283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16300527f0200416cd7-02472881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527f0200474ed0_90224683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527f0200474ed0_90224683')) {function content_527f0200474ed0_90224683($_smarty_tpl) {?><!DOCTYPE HTML>
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
		<section id="courses" class="block">
			<h1>Курсы валют</h1>
			<ul>
				<li>
					<span class="icon">$</span>
					<span class="value">135</span>
				</li><li>
					<span class="icon">€</span>
					<span class="value">35</span>
				</li><li>
					<span class="icon">CNY</span>
					<span class="value">135</span>
				</li><li>
					<span class="icon">¥</span>
					<span class="value">135</span>
				</li>
			</ul>
		</section>
	</div>
</body>
</html><?php }} ?>
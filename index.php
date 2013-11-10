<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/simple_html_dom.php';

$smarty = new TSmarty();
$smarty->force_compile = true;
$source = 'page.html';
$source_prim = 'http://primpogoda.ru/';
$html = file_get_html('page.html');

//валюты
function ParseCurrencies($name)
{
   global $html;
   $result = $html->find('#cource' . $name . ' div.value', 0)->plaintext;
   return $result;
}
$cur_names = Array('USD', 'EUR', 'CNY', 'JPY');
foreach ($cur_names as $cur) {
   $currencies[$cur] = ParseCurrencies($cur);
}

//радиационный фон
$radiation = Array(
   'amount'  => $html->find('div.radiation span', 0)->plaintext,
   'comment' => $html->find('div.radiation div.comment', 0)->plaintext
);

//новости
$news = Array();
foreach ($html->find('div.news div.news-item') as $div) {
   if (count(explode(' ', $div->class)) > 1) continue;
   $new = Array();
   $new['href']   = $div->find('a.news-pic', 0)->href;
   $new['img']    = $source_prim . $div->find('img.preview', 0)->src;
   $new['date']   = $div->find('div.time', 0)->plaintext;
   $new['header'] = $div->find('.news-header', 0)->plaintext;
   $news[] = $new;
}
$smarty->assign('news', $news);
$smarty->assign('currencies', $currencies);
$smarty->display('html.tpl');
?>

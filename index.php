<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/simple_html_dom.php';

$smarty = new TSmarty();
$smarty->force_compile = true;

$prim_source = 'prim_page.html';
$source_prim = 'http://primpogoda.ru/';
$prim_html = file_get_html($prim_source);

function GetImgUrlFromBackgroundStyle($style)
{
   // $style = "background-image: url(http://kino.vl.ru//kino/images/vlrukeykoposter1.jpg)";
   // echo $style;
   // echo "<br>";
   return preg_match("/background-image: url\(([\/a-zA-Z0-9\.:_]+)\)/", $style, $res) ? $res[1] : '';
   // $backg_len = strlen('background-image:');
   // $start = substr($style, $backg_len);
}

//валюты
function ParseCurrencies($name)
{
   global $prim_html;
   $result = $prim_html->find('#cource' . $name . ' div.value', 0)->plaintext;
   return $result;
}
$cur_names = Array('USD', 'EUR', 'CNY', 'JPY');
foreach ($cur_names as $cur) {
   $currencies[$cur] = ParseCurrencies($cur);
}

//радиационный фон
$radiation = Array(
   'amount'  => $prim_html->find('div.radiation span', 0)->plaintext,
   'comment' => $prim_html->find('div.radiation div.comment', 0)->plaintext
);

//новости
$news = Array();
$max_news_amount = 6;
$cur_news_amount = 0;
foreach ($prim_html->find('div.news div.news-item') as $div) {
   if ($cur_news_amount == $max_news_amount) break;
   if (count(explode(' ', $div->class)) > 1) continue;
   $new = Array();
   $new['href']   = $div->find('a.news-pic', 0)->href;
   $new['img']    = $source_prim . $div->find('img.preview', 0)->src;
   $new['date']   = $div->find('div.time', 0)->plaintext;
   $new['header'] = $div->find('.news-header', 0)->plaintext;
   $news[] = $new;
   $cur_news_amount++;
}

//погода
$weather = Array();
foreach ($prim_html->find('.short-forecast .widget-body div') as $div) {
   $day                = Array();
   $day['icon']        = $source_prim . GetImgUrlFromBackgroundStyle($div->find('.widget-weather', 0)->style);
   $day_style          = $div->find('.widget-weather', 0)->style;
   $img_s              = substr($day_style, strpos($day_style, '/img/'));
   $day['temperature'] = $div->find('.widget-temp', 0)->plaintext;
   $date               = $div->find('.widget-date', 0);
   $day['date']        = $date->title;
   $day['week_date']   = $date->plaintext;
   $weather[] = $day;
}

//события города
$vl_poster_source = 'http://www.vl.ru/';
$vl_poster_html = file_get_html($vl_poster_source);
$posters = Array();
$cnt = 0;
foreach ($vl_poster_html->find('div.concerts-item') as $div) {
   $poster['href'] = $div->find('a', 0)->href;
   $poster['title'] = $div->find('a', 0)->title;
   $poster['icon'] = GetImgUrlFromBackgroundStyle($div->find('span', 0)->style);
   $posters[] = $poster;
}

$smarty->assign('news', $news)
       ->assign('currencies', $currencies)
	   ->assign('weather', $weather)
       ->display('html.tpl');
?>

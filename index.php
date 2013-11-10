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
   return preg_match("/background-image: url\(([\/a-zA-Z0-9\.:_]+)\)/", $style, $res) ? $res[1] : '';
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
   $day['icon']        = GetImgUrlFromBackgroundStyle($div->find('.widget-weather', 0)->style);
   $day['temperature'] = $div->find('.widget-temp', 0)->plaintext;
   $date               = $div->find('.widget-date', 0);
   $day['date']        = $date->title;
   $day['week_date']   = $date->plaintext;
   $weather[] = $day;
}

//события города
// $vl_poster_source = 'http://www.vl.ru/';
// $vl_poster_html = file_get_html($vl_poster_source);
// $posters = Array();
// $cnt = 0;
// foreach ($vl_poster_html->find('div.concerts-item') as $div) {
//    $poster['href'] = $div->find('a', 0)->href;
//    $poster['title'] = $div->find('a', 0)->title;
//    $poster['icon'] = GetImgUrlFromBackgroundStyle($div->find('span', 0)->style);
//    $posters[] = $poster;
// }

//кино
$vl_cinema_source = 'http://kino.vl.ru/';
$vl_cinema_html = file_get_html($vl_cinema_source);
$movies  = Array();
$cinemas = Array();
$max_seance_amount = 4;
foreach ($vl_cinema_html->find('div.schedule-item') as $div) {
   $icon_block         = $div->find('.poster', 0);
   $movie['film_href'] = $icon_block->find('a.poster', 0)->href;
   $movie['icon']      = $icon_block->find('img', 0)->src;
   $movie_description  = $div->find('.decription', 0);
   $movie['name']      = $movie_description->find('h2 a', 0)->plaintext;
   $movie['genre']     = $movie_description->find('.staff i[itemprop="genre"]', 0)->plaintext;
   $movie['director']  = $movie_description->find('.staff i[itemprop="director"]', 0)->plaintext;
   $movie['actors']    = Array();
   foreach ($movie_description->find('.staff i[itemprop="actor"]') as $i) {
      $movie['actors'][] = $i->plaintext;
   }
   $movie['seances'] = Array();
   $cur_seance_amount = 0;
   $seances           = $div->find('.seances', 0);
   foreach ($seances->find('li .time') as $time) {
      if ($cur_seance_amount == $max_seance_amount) break;
      $seance['time'] = substr($time->innertext, 0, strpos($time->innertext, '<br />'));
      $cinema         = $time->find('a', 0);
      $cinema_url     = $cinema->href;
      $cinema_name    = $cinema->plaintext;
      if (empty($cinemas[$cinema_url])) {
         $cinemas[$cinema_url] = $cinema_name;
      }
      $seance['hall']   = $time->alt;
      $seance['cinema'] = $cinemas[$cinema_url];
      $movie['seances'] = $seance;
      $cur_seance_amount++;
   }
   $movie['other_seances_href'] = $div->find('.other a', 0)->href;
   $movies[] = $movie;
}

$smarty->assign('news', $news)
       ->assign('movies', $movies)
       ->assign('currencies', $currencies)
       ->display('html.tpl');
?>


{foreach from=movies item=movie}
   {$movie.film_href}
   {$movie.icon}
   {$movie.name}
   {$movie.genre}
   {$movie.director}
   {foreach from=$movie.actors item=actor}
      {$actor}
   {/foreach}
   {$movie.seances.time}
   {$movie.seances.hall}
   {$movie.seances.cinema}
   {$movie.other_seances_href}
{/foreach}
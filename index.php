<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';

$smarty = new TSmarty();
$smarty->force_compile = true;

$html = file_get_html('http://primpogoda.ru/');

$usd = $html->find('#courceUSD');
$usd = $html->find('#courceUSD');
// courceEUR
// courceCNY
// courceJPY

$smarty->display('html.tpl');
?>

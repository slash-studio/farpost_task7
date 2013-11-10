<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/settings.php';

$smarty = new TSmarty();
$smarty->force_compile = true;
$smarty->display('html.tpl');
?>

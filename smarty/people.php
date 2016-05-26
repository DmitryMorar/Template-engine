<?php

define('SMARTY_DIR', 'vendor/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'views/templates/';
$smarty->compile_dir = 'views/templates_c/';
$smarty->config_dir = 'views/configs/';
$smarty->cache_dir = 'views/cache/';

include 'models/people-data.php';
$smarty->assign('peopleList', $peopleList);

$pageFlag = 'people';
$smarty->assign('pageFlag', $pageFlag);

$classActive = '__active';
$smarty->assign('classActive', $classActive);

$messageNumber = 2;
$smarty->assign('messageNumber', $messageNumber);

$userName = 'Chuck Dimmler';
$smarty->assign('userName', $userName);

$smarty->display('people.tpl');
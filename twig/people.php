<?php
require_once 'vendor/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$messageNumber = 2;
$userName = 'Chuck Dimmler';

$pageFlag = 'people';

$classActive = '__active';


include 'models/people-data.php';

echo $twig->render('people.html', array(
    'messageNumber' => $messageNumber,
    'userName' => $userName,
    'peopleList' => $peopleList,
    'pageFlag' => $pageFlag,
    'classActive' => $classActive

));
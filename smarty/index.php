<?php

define('SMARTY_DIR', 'vendor/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = 'views/templates/';
$smarty->compile_dir = 'views/templates_c/';
$smarty->config_dir = 'views/configs/';
$smarty->cache_dir = 'views/cache/';

$pageFlag = 'profile';
$smarty->assign('pageFlag', $pageFlag);

$classActive = '__active';
$smarty->assign('classActive', $classActive);

$linkUserAvatar = '/content/img/lg-avatar.png';
$smarty->assign('linkUserAvatar', $linkUserAvatar);

$messageNumber = 2;
$smarty->assign('messageNumber', $messageNumber);

$userName = 'Chuck Dimmler';
$smarty->assign('userName', $userName);

$user = array(
    'name' => 'Chuck Dimmler',
    'position' => 'Managing Director at Torreya',
    'address' => 'United States, New York',
);
$smarty->assign('user', $user);

$userFeatures = array(
    array('label' => 'role', 'value' => 'Strategic transactions and financings'),
    array('label' => 'languages spoken', 'value' => 'English (native) German (perfect) French (average) Spanish (beginner)'),
    array('label' => 'interests', 'value' => 'Phasellus solli. Aenean non. Sed diam'),
    array('label' => 'regions', 'value' => 'Middle East France Germany Spain'),
);
$smarty->assign('userFeatures', $userFeatures);

$userBio = array(
    'content' => 'Cras a hendrerit mauris, non pulvinar massa. Cras egetmagna sollicitudin, vestibulum odio
                et, efficitur nisl. Nulla ac ipsum fringilla, malesuadafelis eu, lacinia urna.
                Vestibulum elementum commodo dapibus. In hac habitasse platea dictumst. Donec laoreet
                ullamcorper erat, id sodales nunc tempor at. Cras luctus dignissim nte, in luctus
                enimpharetra sit amet. Aenean pellentesque, sem et porttitor vestibulum, odio nisl
                vehicula orci, in dignissimsapien tortor eget neque. Mauris at porttitor nisi. Aenean
                sollicitudin cursus gravida. Phasellus id mauris non ipsum tristique eleifend sit amet
                eu nibh. Sed semper ipsum in risus posuere finibus. Quisque diam nunc, lacinia eget
                metus at, auctor. Mauris at porttitor nisi. Aenean sollicitudin cursus gravida.
                Phasellus idmauris non ipsum tristique eleifend sit amet eu nibh. Sed semper ipsum in
                risus posuere finibus.'
);
$smarty->assign('userBio', $userBio);

$userAddress = array(
    array('label' => 'street', 'value' => '117 A 550th St,'),
    array('label' => 'city', 'value' => 'New York'),
    array('label' => 'state / zip', 'value' => 'NY 120033'),
    array('label' => 'country', 'value' => 'United States'),
    array('label' => 'mobile', 'value' => '+1 212-331-8570'),
    array('label' => 'home', 'value' => '212-731-7640'),
    array('label' => 'email', 'value' => 'john.bradley@torreyapartners.com'),
    array('label' => 'private email', 'value' => 'johnbradley@gmail.com'),
);
$smarty->assign('userAddress', $userAddress);

$smarty->display('my-profile.tpl');
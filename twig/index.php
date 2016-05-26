<?php
require_once 'vendor/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));

$messageNumber = 2;
$userName = 'Chuck Dimmler';

$user = array(
    'name' => 'Chuck Dimmler',
    'post' => 'Managing Director at Torreya',
    'address' => 'United States, New York',
);

$linkUserAvatar = 'content/img/lg-avatar.png';

$pageFlag = 'profile';

$classActive = '__active';

$userFeatures = array(
    array('label' => 'role', 'value' => 'Strategic transactions and financings'),
    array('label' => 'languages spoken', 'value' => 'English (native) German (perfect) French (average) Spanish (beginner)'),
    array('label' => 'interests', 'value' => 'Phasellus solli. Aenean non. Sed diam'),
    array('label' => 'regions', 'value' => 'Middle East France Germany Spain'),
);

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

echo $twig->render('my-profile.html', array(
    'messageNumber' => $messageNumber,
    'userName' => $userName,
    'user' => $user,
    'pageFlag' => $pageFlag,
    'classActive' => $classActive,
    'userFeatures' => $userFeatures,
    'userBio' => $userBio,
    'userAddress' => $userAddress,
    'linkUserAvatar' => $linkUserAvatar
));
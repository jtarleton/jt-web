<?php
//require('/var/jt-web/lib/UniversalClassLoader.php');
date_default_timezone_set('America/New_York');

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('front', 'prod',false);



\Facebook\FacebookSession::setDefaultApplication('129560680445301', 'fe6c2dc777675c1091e2e8b59b5b31fc');




sfContext::createInstance($configuration)->dispatch();

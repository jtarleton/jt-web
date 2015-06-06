<?php
namespace Facebook;
use Facebook;
use Facebook\HttpClients\FacebookCurlHttpClient;
//print_r( get_declared_classes() );

?></pre><?php 

// Make a new request and execute it.
try {
/* 
$facebook = new Facebook(array(
 'appId'  => $app_id,
 'fileUpload' =>true,
 'secret' => $application_secret,
 'cookie' => true, // enable optional cookie support
)); 
*/



// If you already have a valid access token:
//$session = new FacebookSession('access-token');
 $session = FacebookSession::newAppSession();

 $response = (new FacebookRequest($session, 'GET', '/7024187'))->execute();
  $object = $response->getGraphObject();
//  echo $object->getProperty('name');
} catch (FacebookRequestException $ex) {
  echo $ex->getMessage();
} catch (\Exception $ex) {
  echo $ex->getMessage();
}


?>

 
<h1>
Projects
</h1>
<b>TinyMVC 1.0</b>
<p>
<a href="http://www.jamestarleton.com/tinymvc/">TinyMVC</a> is a web application demonstrating the <?php echo link_to('MVC architecture', 'http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller'); ?> in PHP.
</p>

<b>
Scooby 1.0</b>
<p><a href="scooby">Scooby</a> is a simple blog application built on <?php echo link_to('MongoDB', 'http://www.mongodb.org'); ?>.</p>

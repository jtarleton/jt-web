<?php
include(dirname(__FILE__).'/../../bootstrap/functional.php');
$browser = new sfTestFunctional(new sfBrowser());
$browser->
  get('/index')->
  with('request')->begin()->
    isParameter('module', 'main')->
    isParameter('action', 'index')->
  end();
  //with('response')->begin()->
    //isStatusCode(302)->
    //checkElement('body', '/Homepage/')->
  //end()

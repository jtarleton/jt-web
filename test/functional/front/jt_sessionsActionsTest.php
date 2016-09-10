<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/jt_sessions/index')->

  with('request')->begin()->
    isParameter('module', 'jt_sessions')->
    isParameter('action', 'index')->
  end();
//  with('response')->begin()->
  //end()

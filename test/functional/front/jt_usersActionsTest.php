<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/jt_users/index')->

  with('request')->begin()->
    isParameter('module', 'jt_users')->
    isParameter('action', 'show')->
  end();
//  with('response')->begin()->
  //end()

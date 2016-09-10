<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/jt_term_relationships/index')->

  with('request')->begin()->
    isParameter('module', 'jt_term_relationships')->
    isParameter('action', 'show')->
  end();
//  with('response')->begin()->
  //  isStatusCode(200)->
  //end()

<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/jt_term_taxonomy/index')->

  with('request')->begin()->
    isParameter('module', 'jt_term_taxonomy')->
    isParameter('action', 'show')->
  end();
//  with('response')->begin()->
  //end()

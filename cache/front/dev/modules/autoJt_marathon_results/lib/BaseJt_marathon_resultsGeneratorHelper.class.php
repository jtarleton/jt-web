<?php

/**
 * jt_marathon_results module configuration.
 *
 * @package    jtweb
 * @subpackage jt_marathon_results
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_marathon_resultsGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jt_marathon_results' : 'jt_marathon_results_'.$action;
  }
}

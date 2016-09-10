<?php

/**
 * jt_terms module configuration.
 *
 * @package    jtweb
 * @subpackage jt_terms
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_termsGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jt_terms' : 'jt_terms_'.$action;
  }
}

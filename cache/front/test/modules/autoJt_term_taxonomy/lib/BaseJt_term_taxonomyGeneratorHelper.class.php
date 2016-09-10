<?php

/**
 * jt_term_taxonomy module configuration.
 *
 * @package    jtweb
 * @subpackage jt_term_taxonomy
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_term_taxonomyGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jt_term_taxonomy' : 'jt_term_taxonomy_'.$action;
  }
}

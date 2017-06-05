<?php

/**
 * jt_links module configuration.
 *
 * @package    jtweb
 * @subpackage jt_links
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_linksGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jt_links' : 'jt_links_'.$action;
  }
}

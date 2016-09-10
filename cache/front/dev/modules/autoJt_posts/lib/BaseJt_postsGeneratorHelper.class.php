<?php

/**
 * jt_posts module configuration.
 *
 * @package    jtweb
 * @subpackage jt_posts
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_postsGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jt_posts' : 'jt_posts_'.$action;
  }
}
